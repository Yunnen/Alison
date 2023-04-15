<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="CSS\receitas.css">
    <title>Document</title>
</head>
<body>
<div class="btns">
  <button class="tablink ef-glow" onclick="openPage('Geral', this, '#ebe1cf')" id="defaultOpen">Todos os itens</button>
  <button class="tablink ef-glow" onclick="openPage('itensP', this, '#ebe1cf')">Itens Padrão</button>
  <button class="tablink ef-glow" onclick="openPage('additens', this, '#ebe1cf')">Itens Padrão</button>
  <button class="tablink ef-glow" onclick="openPage('additens', this, '#ebe1cf')">Itens Padrão</button>
</div>


<div id="Geral" class="tabcontent">

<label class="botao"><i class="fa-solid fa-magnifying-glass"></i>
<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Busca de Item">
</input>
</label>

<button class="plus ef-glow"><i class="fa-solid fa-plus"></i></button>

<ul id="myMenu">
  <li><a href="#">Leather (Light Armour)</a></li>
  <li><a href="#">Studded leather(Light Armour)</a></li>
  <li><a href="#">PHP</a></li>
  <li><a href="#">Python</a></li>
  <li><a href="#">jQuery</a></li>
  <li><a href="#">SQL</a></li>
  <li><a href="#">Bootstrap</a></li>
  <li><a href="#">Node.js</a></li>
</ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/1c8b0a3809.js" crossorigin="anonymous"></script>



<div id="itensP" class="tabcontent" style="width:90%">
  
<table id="itens" class="itenstable" style="width:100%">
    <thead>
      <tr>
        <td class="titulo">Nome</td>
        <td class="titulo">MetaData</td>
        <td class="titulo">Componentes</td>
        <td class="titulo">Teste</td>
        <td class="titulo">Horas</td>
      </tr>
    </thead>
  </table>
</div>


</body>

<script>

$(document).ready(function () {
    $('#itens').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'receitasP.php',
    });
});

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
  function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

}

document.getElementById("defaultOpen").click();

</script>
</html>