<form action="register" method="POST">
    @csrf
    <label for="">Email</label>
    <input type="text" name="email">
    <label for="">Password</label>
    <input type="password" name="password">
    <label for="">Full Name</label>
    <input type="text" name="name">
    <input type="submit">
</form>