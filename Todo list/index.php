<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>To-do-list</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <div class="title-container">
      <h1>To-Do Task</h1>
    </div>
    <div class="form-container">
      <form method="post" action="addtask.php">
        <label for="title">Title</label><br />
        <input type="text" id="title" name="title" required />
        <br /><br />
        <label for="desc">Description</label><br />
        <textarea rows="4" cols="100" id="desc" name="descript"></textarea><br />
        <input type="submit" name="addtask" value="Add Task" />
      </form>

      <div class="table-container">
        <table id="myTable" class="display">
          <thead>
            <tr>
              <th>Sr.</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $conn = mysqli_connect("127.0.0.1","root","","college");
              if(!$conn){
               die("Sorry connection error.".mysqli_connect_error());
              }else{
                $sql = "SELECT * FROM `tasks`;";
                $result = mysqli_query($conn,$sql);            
                if($result){
                  $sr = 1;
                  while($row =  mysqli_fetch_assoc($result)){
                      echo "<tr>
                      <td>".$sr."</td>
                      <td>".$row['title']."</td>
                      <td>".$row['description']."</td>
                      <td>
                        <button class='openModalBtn' 
                          data-id='".$row['sr.']."' 
                          data-title='".$row['title']."' 
                          data-desc='".$row['description']."'>Edit</button>
                        <button><a href='deltask.php?id=".$row['sr.']."'>Delete</a></button>
                      </td>
                      </tr>";
                      $sr+=1;
                  }
                }else{
                 echo "No data found.";
                }
                 mysqli_close($conn);
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ✅ Modal Structure -->
  <div class="modal" id="editModal">
    <div class="modal-content">
      <div class="modal-header">Edit Task</div>
      <form id="editForm" method="post" action="updatetask.php">
        <input type="hidden" id="editId" name="id" />
        <label for="editTitle">Title</label>
        <input type="text" id="editTitle" name="title" required>

        <label for="editDesc">Description</label>
        <textarea id="editDesc" name="description"></textarea>

        <div class="modal-buttons">
          <button type="button" class="btn cancel" id="cancelBtn">Cancel</button>
          <button type="submit" class="btn save">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>

<!-- //use xammp services apache and mysql -->