<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/books/books.css">
</head>

<body>
    <header></header>
    <main>
        <section class="book-container">
            <div class="book-cover">
                <img src="../../../resources/images/book-covers/maki.JPG" alt="">
                <button>Borrow</button>
                <button>Add to readlist</button>
            </div>
            <div class="book-details">
                <p><span>Title: </span> Another Side of my baby</p>
                <p><span>Author: </span> Stefanie Gabion </p>
                <p><span>Release Date: </span> January 25, 2024</p>
                <p><span>Publisher: </span> Mawmaw publisher </p>
                <p><span>ISBN: </span> 1234-567890123 </p>
                <p><span>Description: <br> </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <br>
                <br>
                <p><span>Status </span> Available </p>
                <p><span>Estimated date of return: </span> Bukas </p>

            </div>
        </section>
        <br>
        <section class="comments-container">
            <h1>Comments:</h1>
            <br>

            <div class="comments-wrapper">
                <?php
                for ($i = 0; $i < 10; $i++) { ?>

                    <div class="comment">
                        <img src="" alt="">
                        <div class="comment-content">
                            <p class="comment-details">Charles Togle <span>9, 2024 at 5:50pm</span></p>
                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                <?php    }

                ?>
            </div>
            <br>
            <h1>Leave a Comment</h1>
            <br>
            <textarea name="comment-field" id="" class="comment-field"></textarea>
            <br>
            <button name="comment-submit" class="submit">Submit</button>
            <br>
        </section>
    </main>
</body>

</html>