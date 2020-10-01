<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="imgBx">
                    <img src="./Dunes.jpg" alt="Dunes" class="img">
                </div>

                <div class="content" id="imgcontent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum
                        interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est,
                        ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante
                        ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut
                        hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero
                        sed nunc venenatis imperdiet sed ornare turpis.</p>
                </div>
            </div>
        </div>
        <button id="changecontent" onclick="loadDoc()">Click ME to change the text</button>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("imgcontent").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "hk.txt", true);
            xhttp.send();
        }
    </script>
</body>

</html>