<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../scss/borrow-book/borrow-book.css">
    <script type="module" src="../../../includes/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <main>
        <img src="../../../resources/images/book-covers/maki.JPG" alt="">


        <section class="book-details">
            <div class="details">
                <p><span>Title: </span> Another Side of my baby</p>
                <p><span>Author: </span> Stefanie Gabion </p>
                <p><span>Borrowed by: </span> Charles Nathaniel Togle </p>
                <p><span>Borrowed on: </span> July 13, 2024 </p>
                <p><span>Return by: </span> July 16, 2024 </p>
            </div>
            <div class="terms-conditions">
                <label for="terms"><input type="checkbox" name="terms" id="terms">I agree to the&nbsp; <u  id = "terms-toggle"> Terms and Conditions</u></label>
                <ul id = "terms-and-condition">
                    <li>Failure to return the book on the return date will result into a penalty</li>
                    <li>A penalty of 50 php per day after the return date if the book is not returned</li>
                    <li>Books shall be returned in the same condition in which they were borrowed</li>
                    <li>Failure to comply to the terms and conditions will result into a ban </li>
                </ul>
            </div>
            <button>Borrow</button>
        </section>
        
    </main>
    <script>

        $("#terms-toggle").on('click', (event)=>{
        event.preventDefault()
            $("#terms-and-condition").toggle();
        })
    </script>
</body>

</html>