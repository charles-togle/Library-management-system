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
            <div class="booklist-wrapper">
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
                                                                                    ?>" onclick="bookDescription(<?php echo $i ?>)"> <img src="../../../resources/images/book-covers/maki.JPG" alt=""> </div>
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
            </div>
            <div class="book-desc modal" id="book-desc-modal">
                <div class="img" id="img">

                </div>
                <div class="description" id="description">
                    <!-- <p><span>Title: </span> Book Number () </p>
                    <p><span>Author: </span> Stefanie S. Gabion</p>
                    <p><span>Release Date: </span> October 30, 2004</p>
                    <p><span>Publisher: </span> Gabby's Publishing</p>
                    <p><span>ISBN: </span>1234-36789123</p>
                    <p><span>Status: </span>Borrowed</p>
                    <p><span>Borrowed Until: </span> June 13, 2004</p>
                    <p><span>Overdue: </span> 5 days</p>
                    <p><span>Penalty: </span> 250 php</p> -->
                </div>
                <div class="close-button">
                    <button onclick="closeModal()"> X </button>
                </div>
            </div>
        </section>
    </main>


    </div>
    <script defer>
        var buttons = document.querySelectorAll('div.selection>button')
        buttons.forEach(element => {
            element.addEventListener("click", () => {
                buttons.forEach(btn => {
                    btn.style.background = 'transparent';
                })
                element.style.background = '#d9d9d924';
            })
        });

        var modal = document.getElementById('book-desc-modal');
        modal.style.visibility = 'hidden';

        function bookDescription(bookid) {

            //blur background
            const booklist = document.querySelector(".booklist-wrapper")
            const SidePanel = document.querySelector(".side-panel")
            booklist.classList.add('modal-backdrop')
            SidePanel.classList.add('modal-backdrop')
            // const main = 

            const existingDescription = document.querySelectorAll('#book-desc-modal p');
            // document.querySelectorAll('#book-desc-modal')

            existingDescription.forEach(description => {
                description.remove() //remove all p so that they won't be overwritten instead it will be replaced 
            })

            const existingImage = document.querySelector("#book-desc-modal>#img>img")
            if (existingImage) {
                existingImage.remove()
            }


            const descList = ["Title:", "Author:", "Release Date:", "Publisher:", "ISBN:", "Status:", "Borrowed Until:", "Overdue:", "Penalty:"]
            const img = document.getElementById('img')
            const desc = document.getElementById('description');

            const imgContent = document.createElement("img");
            imgContent.src = "../../../resources/images/book-covers/maki.JPG";
            imgContent.alt = "book cover number " + bookid;
            img.appendChild(imgContent);


            descList.forEach(description => { // loop through desc list
                const p = document.createElement('p');
                const span = document.createElement('span');
                span.textContent = description; //description array
                p.append(span);
                p.innerHTML += bookid //json for the descriptions
                desc.appendChild(p);
                modal.style.visibility = 'visible'

            });
        }

        function closeModal() {
            modal.style.visibility = 'hidden'
            const booklist = document.querySelector(".booklist-wrapper")
            const SidePanel = document.querySelector(".side-panel")
            booklist.classList.remove('modal-backdrop')
            SidePanel.classList.remove('modal-backdrop')            

        }
    </script>
</body>

</html>