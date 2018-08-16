<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CLIPCO - Upload Stock Images</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://www.cusdclipco.org/css.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* some css can go here */
            input.imageUploadInput{
                border: 0;
                visibility: hidden;
            }
            
            .display {
                margin: auto;
                width: 50%;
            }
            
            @media screen and (max-width: 768px) {
                .display {
                    width: 100%;
                }
            }
            
            table {
                width: 90%;
            }
            

        </style>
    </head>
    <body id="top" class="bg-grey" onload="loadImage(0)">
        <div id="navbar-placeholder"></div>
        <script>
            $(function () {
                $("#navbar-placeholder").load("subpage_navbar.html");
            });
        </script>

        <div class="jumbotron text-center bg-white">
            <h1>Stock Image Uploader</h1>
            <p>add to the stock images on clipco</p>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h2>Upload stock images</h2>
                    <?php
                        
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            
                        }
                    ?>
                    <form action="/upload_stock_image.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                        <table>
                            <tr>
                                <td>
                                    Select the category for the image(s)
                                </td> 
                                <td>
                                    <select name="category">
                                        <option value="cnyp">CNYP</option>
                                        <option value="clipart">CLIP Art</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Please select a file to upload.
                                </td>
                                <td class="text-center">
                                    <!--<?php if(!empty($imageErr)){echo "<span class=\"error\">$imageErr</span>";} ?>-->
                                    <label for="image_upload" class="btn btn-default btn-lg imageUplaodButton">Select Image</label>
                                    <input class="imageUploadInput" type="file" accept="image/*" multiple name="image_upload" id="image_upload" onchange="readURL(this);" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button class="btn btn-default btn-lg" type="submit" name="submit">Submit</button>
                                </td>
                            </tr>
                        </table>

                    </form>
                </div>
                <div class="col-sm-4 col-xs-12" id="stock-image">
                    <!-- scripty mcscriptface will fill this in-->
                    <script async src="http://www.cusdclipco.org/imageLoading.js" id="image-laoding-script"></script>
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <a href="#top" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </footer>
        <script async src="http://www.cusdclipco.org/js.js"></script>
        <script>
            function readURL(input) {
                
                var container = input.parentNode;
                
                var counter = 0;
                
                while(counter < input.files.length) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.setAttribute("class","subpage_image display");
                        img.setAttribute("src",e.target.result);
                        container.appendChild(img);

                    }
                    reader.readAsDataURL(input.files[counter]);
                    counter++;
                }
            }
        </script>
    </body>
</html>