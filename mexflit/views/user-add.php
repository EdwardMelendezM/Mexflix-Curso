<?php
if($_POST['r']=='user-add' && $_SESSION['role']=='Admin' && !isset($_POST['crud'])){
    print ('
    <h2 class="p1">Agregar Usuario</h2>
    <form method="post" class="item">
        <div class="p-25">
            <input type="text" name="user" placeholder="user" required>
        </div>
        <div class="p-25">
            <input type="email" name="email" placeholder="email" required>
        </div>
        <div class="p-25">
            <input type="text" name="name" placeholder="name" required>
        </div>
        <div class="p-25">
            <input type="text" name="birthday" placeholder="cumpleaños" required>
        </div>
        <div class="p-25">
            <input type="password" name="pass" placeholder="password" required>
        </div>

        <div class="p_25">
            <input type="radio" name="role" id="admin" value="Admin" required>
            <label for="admin">Administrador</label>
            <input type="radio" name="role" id="noadmin" value="User" required>
            <label for="noadmin">Usuario</label>
            <input type="hidden" name="crud" value="set">
        </div>

        <div class="p_25">
            <input class="button add" type="submit" value="Agregar">
            <input type="hidden" name="r" value="user-add">
            <input type="hidden" name="crud" value="set">
        </div>
    </form>

    ');

}
else if($_POST['r']=='user-add' && $_SESSION['role']=='Admin' && $_POST['crud']=='set'){
    //Programar la insersion
    $users_controller = new UserController();
    $new_user = array(
        'user'=>$_POST['user'],
        'email'=>$_POST['email'],
        'name'=>$_POST['name'],
        'birthday'=>$_POST['birthday'],
        'pass'=>$_POST['pass'],
        'role'=>$_POST['role']
    );
    $user=$users_controller->set($new_user);
    $template='
        <div class="container">
            <p class="item add">Usuario <b>%s</b> salvado</p>
        </div>
        <script>
            window.onload = function(){
                reloadPage("users")
            }
        </script>
    ';
    printf($template,$_POST['user']);   
}else{
    //Recurso no autorizado
    $controller= new ViewController();
    $controller->load_view('error401');
}
