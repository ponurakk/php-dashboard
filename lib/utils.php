<?php

enum ComponentType: string {
  case Login = 'login';
  public const Register = self::Login;
  case PasswordButton = 'passwordButton';
  case MemberTxt = 'memberTxt';
  case ErrorRedirect = 'errorRedirect';
  case NavBar = 'navBar';
  case Box = 'box';
  case Row = 'row';
  case SideBar = 'sideBar';
  case Footer = 'footer';
}

class Render {
  private string $component;
  private $args;

  public function __construct(ComponentType $component, ...$args) {
    $this->component = $component->value;
    $this->args = $args;
  }

  function render() {
    $args = $this->args;
    include "./components/".$this->component.".component.php";
  }

  function render_form(string $action, string $method) {
    $args = $this->args;
    include "./components/login/".$this->component.".component.php";
  }

  function render_login() {
    $args = $this->args;
    include "./components/login/".$this->component.".component.php";
  }

  function render_dash() {
    $args = $this->args;
    include "./components/dashboard/".$this->component.".component.php";
  }
}
