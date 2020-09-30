<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FormTest.css" type="text/css">
    <!-- <script src="FormTest.js" type="text/javascript"></script> -->
    <title>Document</title>
</head>
<body>

    <div>
        <?php
            if(isset($_REQUEST['er'])){
                if($_REQUEST['er'] == 1){
                    echo "<p> Upload successfully </p>";
                }
            }
            
        ?>
    </div>
    <section style="width: 100%;padding: 20px">
        <a href="displayData/DisplayData.inc.php" style="margin-left: 80%;"><button>View Data</button></a>
    </section>
    
    <form action="DataBaseFormTest.inc.php" method="post" id="Form" enctype="multipart/form-data">

        <div class="Input">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <small id="s1">Name is required</small>

        <div class="Input">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div class="Input">
            <label for="birthday">Birth Day</label>
            <input type="date" name="date">
        </div>


        <small id="s2">Email is required</small>

        <div class="Input">
            <label for="phone">Telephone</label>
            <div class="phone-number">
                <select name="telephone" id="">
                    <option value="94">+94 SriLanka</option>
                    <option value="95">+95 India</option>
                    <option value="100">+100 Australia</option>
                    <option value="45">+45 France</option>
                    <option value="12">+12 America</option>
                </select>
                <input type="number" name="number">
            </div>
        </div>
        <small id="s3">Telephone number is required</small>

        <div class="Input">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="" rows="10" placeholder="message here..."></textarea>
        </div>
        <small id="s4">Message is required</small>

        <div class="Input">
            <label for="attachment">Attachment</label>
            <input type="file" name="file1">
        </div>      
        <small id="s5">Attachment is required</small>

        <button type="submit">Start</button>
    </form>
    
</body>
<script type="text/javascript">
    var tagNames = document.getElementsByTagName("INPUT");
    var smallNames = document.getElementsByTagName("SMALL");

    

    document.getElementById("Form").addEventListener('submit', (event) => {
        // alert(tagNames.length);
        var errorMessage = [];

    if(tagNames[0].value == "") {
        smallNames[0].style.display = "block";
        errorMessage.push("Name is required");
    } else{
        smallNames[0].style.display = "none";
    }
    if(tagNames[1].value == "") {
        smallNames[1].style.display = "block";
        errorMessage.push("email is required");
    } else{
        smallNames[1].style.display = "none";
    }
    if(tagNames[2].value == "") {
        smallNames[2].style.display = "block";
        errorMessage.push("telephone number is required");
    } else{
        smallNames[2].style.display = "none";
    }

    if(tagNames[3].value == "") {
        smallNames[4].style.display = "block";
        errorMessage.push("attachment is required");
    } else{
        smallNames[4].style.display = "none";
    }
    if(document.getElementById("message").value == ""){
        smallNames[3].style.display = "block";
        errorMessage.push("Message is required");
    } else{
        smallNames[3].style.display = "none";
    }
   if(errorMessage.length > 0 ){
       event.preventDefault();
   }
});
</script>
</html>