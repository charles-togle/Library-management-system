<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/booklist/booklist.css">
</head>

<body>
    <header></header>
    <main>
        <!-- side-panel for filters -->
        <aside class="side-panel">
          

            <div class="filters">
                <!-- form for filters -->
                <h1>Filters</h1>
                <form action=# method = "POST">

                    <h2>Search</h2>
                    <select name="search-by" id="search-by">
                        <option value="search">Author</option>
                        <option value="search">Title</option>
                    </select>
                    <br>
                    <input type="text" name="search" id="search">

                    <h2>Status</h2>
                    <label for="available"> <input type="radio" name="availability" id="available" value = "available" ><span class="custom-radio"></span>&nbsp;Available</label>
                    <label for="not-available"> <input type="radio" name="availability" id="not-available" value = "not-available" ><span class="custom-radio"></span>&nbsp;Not Available</label>
                    <label for="available-library"> <input type="radio" name="availability" id=available-library" value = "available-library" ><span class="custom-radio"></span>&nbsp;Available in Library</label>

                    <h2>Publishing Year</h2>
                    <select name="publish-year" id="publish-year">
                        <?php //loop options, distinct years in db

                        //example loop only
                        $i = 5;
                        while ($i != 0) { ?>
                            <option value="<?php echo $i //option value here
                                            ?>"> <?php echo $i // option her
                                                    ?> </option>

                        <?php $i--;
                        } ?>

                    </select>

                    <h2>Book Type</h2>
                    <label for="academic"> <input type="radio" name="book-type" id="academic" value = "academic"><span class="custom-radio"></span>&nbsp;Academic</label>
                    <label for="fictional"> <input type="radio" name="book-type" id="fictional" value = "fictional"><span class="custom-radio"></span>&nbsp;Fictional</label>
                    <label for="non-fictional"> <input type="radio" name="book-type" id="non-fictional" value = "non-fictional"><span class="custom-radio"></span>&nbsp;Non Fictional</label>

                    <h2>Genre</h2>
                    <select name="genre" id="genre">
                        <?php //loop options, distinct years in db

                        //example loop only
                        $i = 5;
                        while ($i != 0) { ?>
                            <option value="<?php echo $i //option value here
                                            ?>"> <?php echo $i // option her
                                                    ?> </option>

                        <?php $i--;
                        } ?>

                    </select>
                    <br>

                    <button> Submit </button>


                </form>
            </div>
        </aside>
        <!-- main section -->
        <section class="booklist-container">
            <!-- pagination top -->
            <div class="page">
                <ul>
                    <?php

                    for ($i = 1; $i < 5; $i++) {  //change this to while loop for database data extraction 
                    ?>

                        <li> <?php echo $i ?>
                            <!-- add function for next page  -->

                        </li>

                    <?php } ?>
                </ul>
            </div>



            <!-- booklist -->


            <div class="booklist">
                <?php for ($i = 0; $i < 20; $i++) {  //change this to while loop for database data extraction
                $status = "available" //add code for book status here
                ?>
                    <div class="book">
                        <div class="book-cover <?php echo $status?>" id="book-<?php echo $i // replace with book id ?>"> <img src="../../../resources/images/book-covers/maki.JPG" alt=""> </div> 
                        <!-- book cover -->
                        <div class="book-title">this is text with two lines</div>
                        <!-- title -->
                        <div class="book-author">Stefanie</div>
                        <!-- author -->

                    </div>
                <?php } ?>
            </div>




            <!-- pagination bottom -->
            <div class="page">
                <ul>
                    <?php

                    for ($i = 1; $i < 5; $i++) {  //change this to while loop for database data extraction 
                    ?>

                        <li> <?php echo $i ?>

                            <!-- add function for next page  -->
                        </li>

                    <?php } ?>
                </ul>
            </div>

        </section>
    </main>
</body>

</html>