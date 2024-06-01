<?php
/*
    Template name: Form-Reviews
    */
?>
<?php get_header() ?>
<main>
    <div class="main-wrapper">
        <section id="reviews">
            <div class="reviews-wrapper">
                <h3>Залишити відгук</h3>
                <!-- 						 <h3>Вибачте, ця функція тимчасово не працює.</h3>
						<h3>Проводиться технічне обслуговування.</h3> -->
                <a href="http://localhost/wordpress-6.1.1-uk/wordpress/Taplink/" class="close"><img src="https://tkachenko-beauty.com.ua/wp-content/themes/Taplink/assets/icons/arrow.svg" alt="Arrow" width="9.95">
                    <p>Назад</p>
                </a>
                <form id="form-reviews" class="form-reviews" action="http://localhost/wordpress-6.1.1-uk/wordpress/wp-content/themes/Taplink/insert.php" method="POST">
                    <input type="text" name="username" placeholder="Ваше ім'я" required>
                    <textarea type="text" name="comment" placeholder="Коментар:" required></textarea>
                    <input type="submit" class="information-button" value="ОПУБЛІКУВАТИ">
                </form>

            </div>
        </section>
    </div>
</main>

<?php get_footer() ?>