<?php

enum ComponentType: string {
  case Login = 'login';
  public const Register = self::Login;
  case PasswordButton = 'passwordButton';
  case MemberTxt = 'memberTxt';
  case ErrorRedirect = 'errorRedirect';
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

  function as_form(string $action, string $method) {
    $args = $this->args;
    include "./components/".$this->component.".component.php";
  }
}
