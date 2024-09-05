<main>
    <div>
        <h1>Bienvenido</h1>
    </div>
    <div>
        <form action="/inventarios/login/validate/" method="post">
            <?php Field::input('Usuario', 'text', 'usuario', '', $required = true); ?>
            <?php Field::input('Contraseña', 'password', 'password', '', $required = true); ?>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</main>