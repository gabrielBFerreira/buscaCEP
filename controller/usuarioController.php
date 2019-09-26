<?php

require "model/usuario.php";

function index() {
    $id = $_SESSION["id"];
    $data["usuario"] = verUsuario($id);
    display("usuario/view", $data);
}

/** anon */
function add() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        if ($senha == $rsenha) {
            alert(cadastrarUsuario($email, $senha, $nome));
            redirecionar("../login/index");
        } else {
            alert("Senhas não coincidem.");
            display("usuario/form");
        }
    } else {
        display("usuario/form");
    }
}

function view($id) {
    $data['usuario'] = verUsuario($id);
    display("usuario/view", $data);
}

function edit($id) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        if ($senha == $rsenha) {
            alert(alterarUsuario($id, $email, $senha, $nome));
            redirecionar("../index");
        } else {
            $data['usuario'] = verUsuario($id);
            alert("Senhas não coincidem.");
            display("usuario/form", $data);
        }
    } else {
        $data['usuario'] = verUsuario($id);
        display("usuario/form", $data);
    }
}

function del($id) {
    alert(excluirUsuario($id));
    authLogout();
    redirecionar("login/index");
}

?>