<?php

enum ComponentType: string {
  case Login = 'login';
  public const Register = self::Login;
  case PasswordButton = 'passwordButton';
  case MemberTxt = 'memberTxt';
  case ErrorRedirect = 'errorRedirect';
  case NavBar = 'navBar';
  case SideBar = 'sideBar';
  case Footer = 'footer';

  // Dashboard sites
  case Couriers = 'dashboard/couriers';
  case Departments = 'dashboard/departments';
  case Status = 'dashboard/status';
  case Vehicles = 'dashboard/vehicles';

  // Table Rows
  case CourierRow = 'courierRow';
  case DepartmentRow = 'departmentRow';
  case VehicleRow = 'vehicleRow';

  // Add to database
  case AddDepartment = 'addDepartment';
  case AddCourier = 'addCourier';
  case AddVehicle = 'addVehicle';
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

  function render_view() {
    include "./views/".$this->component.".view.php";
  }
}
