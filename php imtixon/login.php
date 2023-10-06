
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>products</title>
  </head>
  <body>
  <?php include 'foo.php';?>
    <div class="container">
        
        <div class="row">
            <div class="col-12">
             </form>
                <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i class="fa fa-plus">  
                </i></button>
                <table class="table table-striped table-hover mt-2">
                    <thead class="thead-dark">
                        <th>Id</th>
                        <th>Product_name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </thead>
                    <tbody>
                        <?PHP foreach ($result as $res) { ?>

                           

                        
                        <tr>
                            <td><?php echo $res->id; ?></td>
                            <td><?php echo $res->product_name; ?></td>
                            <td><?php echo $res->quantity; ?></td>
                            <td><?php echo $res->price; ?></td>
                            <td><a href="?id=<?php echo $res->id; ?>" class="btn btn-success"
                            data-toggle="modal" data-target="#edit<?php echo $res->id; ?>"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $res->id; ?>><i class="fa fa-trash-alt"></i></a></td>

                        </tr>
                        <?PHP } ?>
                         <!-- Modal edit -->
                    <div class="modal fade" id="edit<?php echo $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Изменить запись</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                     <div class="modal-body">
                     <form action="?id=<?php echo $res->id; ?>" method="post">
                     <div class="form-group">
                     <small>Name</small>
                      <input type="text" class="form-control" name="name" value="<?php echo $res->name; ?>">
                     </div>
                    <div class="form-group">
                    <small>Email</small>
                    <input type="text" class="form-control" name="email" value="<?php echo $res->email; ?>">
                     </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="edit">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Modal edit -->
     <!-- Modal delete -->
     <div class="modal fade" id="delete<?php echo $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">удалить запись
                        № <?php echo $res->id; ?>
                     </h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    
      <div class="modal-footer">
      <form action="?id=<?php echo $res->id; ?>" method="post">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Modal delete -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Добавит запись</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
         <div class="form-group">
            <small>Name</small>
            <input type="text" class="form-control" name="name">
         </div>
         <div class="form-group">
         <small>Email</small>
            <input type="text" class="form-control" name="email">
         </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Modal create -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



<!-- The source code and deployment instruction (i.e readme.md how to deploy and run program ) should be posted in public code repository, for example github.com. 
The repository link should be sent to e-mail emils.inter.  -->