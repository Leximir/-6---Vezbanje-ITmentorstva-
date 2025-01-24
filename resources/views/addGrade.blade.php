<form method="POST" action="/add-user-grade">
    {{ csrf_field() }}
    <input required name="profesor" placeholder="Unesite ime profesora" type="text">
    <input required name="predmet" placeholder="Unesite predmet" type="text">
    <input required name="ocjena" placeholder="Unesite ocjenu" type="number">
    <button>Sacuvaj ocjenu</button>
</form>
