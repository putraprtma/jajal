<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="tambahaksimasyarakat.php" method="post">

    
    

    <label for="fnik">nik</label>
    <input type="number" id="fnik" name="fnik" placeholder="isikan nik..">

    <label for="fnama">nama</label>
    <input type="text" id="fnama" name="fnama" placeholder="isikan nama..">

     <label for="ftanggallahir">tanggallahir</label>
    <input type="number" id="ftanggallahir" name="ftanggallahir" placeholder="isikan nama..">

<label for="fpekerjaan">pekerjaan</label>
    <input type="text" id="fpekerjaan" name="fpekerjaan" placeholder="isikan pekerjaan..">    
  
<label for="fgolongandarah">golongandarah</label>
    <input type="text" id="fgolongandarah" name="fgolongandarah" placeholder="isikan golongandarah..">

<label for="falamat">alamat</label> 
    <input type="text" id="falamat" name="falamat" placeholder="isikan alamat..">

<label for="fumur">umur</label>
    <input type="text" id="fumur" name="fumur" placeholder="isikan umur..">


    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>





    
  
    