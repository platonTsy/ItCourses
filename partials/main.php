

<header class="bg-image">
    <div class="container">
        <h1>makeIT</h1>

        <h2>Курси програмування</h2>
    </div>
</header>

<section class="">

    <div class="container">
        <!-- -->
        <div class="col-10 features">
            <h3>makeIT — перші та єдині курси програмування для всіх бажаючих у місті Бровари. </h3>

            <p style="font-size: 20px">Наша головна особливість полягає в тому, що ми пояснюємо будь-який матеріал у простій та доступній для
                кожного формі. Тому не варто боятись, що у Вас щось не вийде. Ми переконані, що за правильного підходу
                та бажання, програмування реально освоїти кожному! </p>
        </div>
    </div>
</section>

<section class="section--primary">
    <div class="container" align="center">
        <h3>На данний момент на makeIT доступний повний курс програмування на мові Java. Весь курс складається з трьох
            частин. </h3>
        <br>

        <div class="col-3 features" >

            <h3>JAVA BASIC</h3>

            <p><b>(1 місяць, 8 занять)</b></p>
            <span class="price">900 грн.</span>

            <p>• введеня в програмування</p>

            <p>• компіляція, синтаксис мови</p>

            <p>• локальні змінні, оператори</p>

            <p>• масиви, виклики методів</p>

            <p>• цикли, рекурсія</p>

            <p>• String та його методи</p>

        </div>
        <div class="col-3 features">
            <h3>JAVA CORE</h3>

            <p><b>(2 місяці, 16 занять)</b></p>
            <span class="price">1 900 грн.</span>

            <p>• класи, основи ООП</p>

            <p>• три принципи ООП</p>

            <p>• виключення та робота з ними</p>

            <p>• абстрактні класи та інтерфейси</p>

            <p>• робота з колекціями</p>

            <p>• введення в multithreading</p>

        </div>
        <div class="col-3 features">
            <h3>JAVA PRO</h3>

            <p><b>(2 місяці, 16 занять)</b></p>
            <span class="price">2 500 грн.</span>

            <p>• робота з базами даних, JDBC</p>

            <p>• Servlet API, JSP</p>

            <p>• Технології ORM, Hibernate</p>

            <p>• автоматизація проектів, Maven</p>

            <p>• введення в Spring Framework</p>

            <p>• підготовка до співбесіди</p>
        </div>
    </div>
</section>


<section class="" style="background: lightblue">
    <div class="container" align="center">
        <h3>Система знижок</h3>
        <div class="col-3 text--center">
            <div><div class="discount"><b>-10%</b> Школярам та студентам</div></div>
        </div>
        <div class="col-3 text--center">
            <div><div class="discount"><b>-500 грн.</b> при оплаті за весь курс</div></div>
        </div>
        <div class="col-3 text--center">
            <div><div class="discount"><b>-20%</b> Приведи друга</div></div>
        </div>

    </div>
</section>

<section class="cd-intro">
    <h1 class="cd-headline rotate-1">
        <span>Програмування - це</span>
			<span class="cd-words-wrapper">
				<b class="is-visible">престижно</b>
				<b>прибутково</b>
				<b>легко</b>
                <b>цікаво</b>
			</span>
    </h1>
</section>

<section class="section--primary--alt">
    <div class="container">
        <h3>Не втрать свій шанс отримати високооплачувану роботу у сфері ІТ.</h3>
    </div>
</section>

<section class="section--primary--light">
    <div class="container">
        <h3 style="font-weight: 500">Телефони: </h3>

        <div class="col-3 " align="center"><h3>(093) 904-94-47</h3></div>
        <div class="col-3 " align="center"><h3>(098) 515-30-10</h3></div>
        <div class="col-3 " align="center"><h3>(063) 270-00-76</h3></div>
    </div>
</section>
<section class="section--primary--light">
    <div class="container">
        <h3 style="font-weight: 500">Email: </h3>

        <div class="col-1" align="center"><h3>makeitcourses@gmail.com</h3></div>
    </div>
</section>

<section class="section--primary--light">
    <form id="form" action="../Files/file.php"  method="post">
        <h3 align="center">Подати заявку онлайн</h3>
        <fieldset><input id="fname" required="required" type="text" name="firstname" placeholder="Ім'я"/></fieldset>
        <fieldset><input id="lname" required="required" type="text" name="lastname" placeholder="Прізвище"/></fieldset>
        <fieldset><input required="required" type="text" name="phone" placeholder="Номер телефону"/></fieldset>
        <fieldset><input id="email" required="required" type="text" name="email" placeholder="e-mail"/></fieldset>
        <fieldset><select required="required" name="course" class="selection">
            <option value="">Обрати курс</option>
            <option value="Basic">JAVA BASIC</option>
            <option value="Core">JAVA CORE</option>
            <option value="Pro">JAVA PRO</option>
        </select>
        </fieldset>
        <fieldset><select required="required" name="how_find" class="selection">
            <option value="">Як ви дізнались про нас</option>
            <option value="google">Знайшли через пошуковик</option>
            <option value="vk">Через групу vk</option>
            <option value="fb">Через групу facebook</option>
            <option value="friends">Вiд друзiв</option>
            <option value="ad">Через оголошення</option>
        </select>

        </fieldset>
        <fieldset><input type="submit" name="submit" value="Подати заявку"/></fieldset>
    </form>
</section>
<script>

//        jQuery("#form").bind("submit", function() {
//
//            var nameTxt = jQuery("#name").val();
//            var emailTxt = jQuery("#email").val();
//            $.post('Files/file.php',
//                {
//                    name: nameTxt,
//                    email: emailTxt
//                },
//                function(data) {
//                    if (data == 'ko')
//                        alert('Could not submit...');
//                    else {
//                        alert('Thank you for your message.');
//                    }
//                });
//            return false;
//        }



</script>
<footer>

    <div class="container">
        <ul>
            <a href="https://www.facebook.com/makeitcourses" class="social-button facebook"><i
                    class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/makeitcourses/" class="social-button instagram"><i
                    class="fa fa-instagram"></i></a>
            <a href="https://vk.com/makeit_courses" class="social-button vkontakte"><i class="fa fa-vk"></i></a>
        </ul>
        <br>

 <p>&copy; 2015 makeIT Courses. Курсы программирования в Броварах</p>

    </div>
</footer>
