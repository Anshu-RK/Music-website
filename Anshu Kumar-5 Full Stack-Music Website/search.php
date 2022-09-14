<body>
  <div class="search" id="serch">
    <div class="search-bar">
      <div class="contain">
        <span class="material-icons" style="margin-left:10px;margin-top:10px;    font-size: xx-large;">search</span>
        <input type="search" name="search" id="search" onkeyup=" myFunction()" placeholder="Search for Song you Love!">
      </div>
    </div>
    <div style="width:100%; padding: 2%;">
      <table class="table table-responsive" id="myable" style="display: inline-table;">
        <thead>
          <tr>
          <th>Title</th>
          <th>artist</th>
          <th>Song Name</th>
          </tr>
          <tbody>
          <?php
      include 'connection.php';
      $rocket = "SELECT title, path, artist,images FROM songs";
      $res = mysqli_query($conn, $rocket);  
      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($res)) {
          echo '<tr><td>'.$row['title'].'</td><td> '.$row['artist'].'</td>
          <td> <a href=index.php?rock='. $row['path'].' >'. $row['path'] .'</a><span class="material-icons ">
          play_circle_filled
      </span>
      
      </td></tr>';
        
        }
      }

      ?>
      
          </tbody>
        </thead>
      </table>
      <!-- <span><b>Song Name</b></span>
        <span><b>Duration</b></span>
        <span><b>artist</b></span> -->

    </div>
    <hr>
    <div class="list_of_songs">

  

    </div>
  </div>
</body>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>