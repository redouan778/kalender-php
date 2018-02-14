<h3>Voeg een nieuwe verjaardag toe</h3>
<div>
  <form action="birthday/newBirthday" method="post">
    <label for="fname">Naam</label>
    <input type="text" id="person" name="person" placeholder="Nieuwe naam">

    <label for="fname">Dag</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="day" name="day" min="1" max = "31" placeholder="Dag">
    <br>
    <label for="fname">Maand</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="month" name="month"  min="1" max = "12" placeholder="Maand">
    <br>
    <label for="fname">Jaar</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="year" name="year"  min="1900" max = "2018" placeholder="Jaar">

    <input type="submit" value="Versturen">
  </form>
</div>
