{include file='templates/header.tpl'}
<div class="formulario">
    <h2>Log In</h2>

    <form action="verify" method="POST" class="formulario-create-cliente">
                <input type="text" placeholder="email" name="email" id="email" required>
                <input type="password" placeholder="password" name="password" id="password" required>
                <input type="submit" class="btn-login" value="Login">
    </form>

    <h4>{$error}</h4>
</div>
{include file='templates/footer.tpl'}