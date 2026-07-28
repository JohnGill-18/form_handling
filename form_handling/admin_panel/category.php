    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>category</title>
    </head>
    <body>




<h1 class = 'text-center mt-1' >Add Category</h1>

   <div class="container" style="border: 0.5px black; height: 300px;" >
        <div class="row">
            <div class="col-4 mx-auto">
                <form action="../code.php" method='post'  enctype="multipart/form-data">
                   
                    <input type="text" placeholder="Enter Category " class="form-control mt-3" required name="category_name">

                    <input type="file" placeholder="Upload Your File" class="form-control mt-3" required name="category_file"> 


                        <button type="submit" class="d-flex btn btn-dark mt-3" name="category_btn">submit</button>
                </form>
            </div>
        </div>
    </div>






        
    </body>
    </html>