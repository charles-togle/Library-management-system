<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../scss/account/account.css">
    <title>Document</title>
</head>

<body>


    <main>
        <aside class="side-panel">
            <div class="profile">
                <!-- <img src="" alt=""> -->
                 <div class="img"></div>
                <p>Charles Togle</p>
            </div>
            <div class="selection">
                <button id="view-borrowed">View Borrowed</button>
                <button id="view-read">View Read</button>
                <button id="view-readlist">Read List</button>
            </div>
            <div class="change-profile">
                <button id="change-username">Change Username</button>
                <button id="change-password">Change Password</button>
            </div>
            <button id="log-out">Log Out</button>
        </aside>

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
                        <div class="book-cover <?php echo $status ?>" id="book-<?php echo $i // replace with book id 
                                                                                ?>"> <img src="../../../resources/images/book-covers/maki.JPG" alt=""> </div>
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
    <script defer>
        var buttons = document.querySelectorAll('div.selection>button')
        buttons.forEach(element => {
            element.addEventListener("click", ()=>{
                buttons.forEach(btn => {
                    btn.style.background = 'transparent';
                })
                element.style.background = '#d9d9d924';
            }) 
        });

        

        
    </script>
</body>

</html>