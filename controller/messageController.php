<?php 
function messages() {
    require("view/messagesView.php");
}
function messageAdd() {
    session_start();
    if(!empty($_POST)) {
        //clearForm($_POST);
        $idGetter = getID($_POST["pseudo"]);
        addMessage($_POST, $_SESSION["user"]["id"], $idGetter);
        redirectTo("messages");
    }
    require("view/messagesAddView.php");
}
function messageDelete() {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteMessage($id)) {
        header("Location: ../messages");
        exit;
    }
    require("view/messagesView.php");
}
?>