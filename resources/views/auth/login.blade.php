<form action="/login" method="POST">
    @csrf
    <label for="name">Username : </label>
    <input type="text" id="name" name="name" required>   
    <label for="password">Password : </label>
    <input type="password" id="password" name="password" required>   
    <button type="submit">masuk</button>
</form>