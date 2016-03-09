function template(tmpl, context, filter) {
    'use strict';
    return tmpl.replace(/\{([^\}]+)\}/g, function (m, key) {
// If key don't exists in the context we should keep template tag as is
        return key in context ? (filter ? filter(context[key]) : context[key]) : m;
    });
}

app.directive('match', function ($parse) {
    return {
        require: 'ngModel',
        link: function (scope, elem, attrs, ctrl) {
            scope.$watch(function () {
                return $parse(attrs.match)(scope) === ctrl.$modelValue;
            }, function (currentValue) {
                ctrl.$setValidity('mismatch', currentValue);
            });
        }
    };
})
    .directive("ngFileSelect", ['$parse', function ($parse) {
        return {
            restrict: 'A',
            link: function (scope, el, attrs) {
                el.bind("change", function (e) {
                    scope.file = (e.srcElement || e.target).files[0];
                    scope.getFile();
                });
            }
        }
    }])

    .directive('ngSetMaxlength', function () {
        return {
            restrict: 'A',
            require: 'ngModel',
            link: function (scope, elem, attrs, ctrl) {
                attrs.$set("ngTrim", "false");
                var maxLength = parseInt(attrs.ngSetMaxlength, 10);
                ctrl.$parsers.push(function (value) {
                    if (value && value.length > maxLength) {
                        value = value.substr(0, maxLength);
                        ctrl.$setViewValue(value);
                        ctrl.$render();
                    }
                    return value;
                });
            }
        };
    })

    .directive('demoDatePicker', function () {
        return {
            restrict: 'EA',
            require: '?ngModel',
            link: function (scope, element, attrs, ngModel) {
                var datepicker;
                var optionsObj = {
                    onSelect: function (dateText, inst) {
                        scope.$apply(function () {
                            ngModel.$setViewValue(dateText);
                        });
                    }
                };
                datepicker = $(element).datepicker(optionsObj);
                scope.$watch(attrs.ngModel, function (value) {
                    if (value && value.indexOf("/") < 0) {
                        value = value.slice(0, 10);
                        var year = parseInt(value.substring(0, 4));
                        var month = parseInt(value.substring(5, 7));
                        var day = parseInt(value.substring(8, 10));
                        datepicker.datepicker('setDate', new Date(year, month - 1, day));
                    } else {
                        datepicker.datepicker('setDate', new Date(ngModel.$viewValue));
                    }
                    datepicker.datepicker('refresh');
                });
            }
        };
    })

    .directive('numbersOnly', function () {
        return {
            require: 'ngModel',
            link: function (scope, element, attrs, modelCtrl) {
                modelCtrl.$parsers.push(function (inputValue) {
                    if (inputValue == undefined) return '';
                    var transformedInput = inputValue.replace(/[^0-9+.]/g, '');
                    if (transformedInput.length > 2) {
                        transformedInput = transformedInput.substr(0, 2);
                    }
                    if (transformedInput != inputValue) {
                        modelCtrl.$setViewValue(transformedInput);
                        modelCtrl.$render();
                    }
                    return transformedInput;
                });
            }
        }
    })

    .directive('showModeratorItem', function () {
        return {
            restrict: 'A',
            templateUrl: 'partials/blog/item.html'
        }
    })

    .directive('jdatepicker', function() {
        return {
            restrict: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ctrl) {
                $(element).datepicker({
                    dateFormat: 'yy-mm-dd',
                    onSelect: function(date) {
                        ctrl.$setViewValue(date);
                        ctrl.$render();
                        scope.$apply();
                    }
                });
            }
        };
    })

    .directive('ngComments', function () {
        return {
            restrict: 'A',
            controller: 'ItemCommentController',
            templateUrl: 'partials/blog/comment_form.html'
        }
    });




