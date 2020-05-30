<?php

//INFORMASI MENGENAI KARYAWAN

class Company{

	//property
	public $name;

	//method
	public function setCompanyName($name){
		$this->name = $name;
	}

	public function getCompanyName(){
		return $this->name;
	}

}

class Department{
	//property
	public $name;

	//method
	public function setDepartmentName($name){
		$this->name = $name;
	}

	
	public function getDepartmentName(){
		return $this->name;
	
	}
}

class Employee{
	//property
	public $name;
	public $title;
	public $salary;

	//method
	public function setEmployeeName($name){
		$this->name = $name;

	}
	public function getEmployeeTitle(){
		return $this->title;
	}

	public function getEmployeeProfile(){
		return $this->name;
	}
	public function getEmployeeMonthlySalary(){
		return $this->salary;
	}

}



$company_1 = new Company();

$company_1->setCompanyName("PT. Suka Makmur");

$department_1 = new Department();

$department_1->setDepartmentName("Department Komunikasi");

$employee_1 = new Employee();
$employee_1->setEmployeeName("Wenny");
$employee_1->title="Jurnalis";
$employee_1->salary="100000";




echo "INFORMASI KARYAWAN";
echo "<p>";
echo "Company:". $company_1->getCompanyName() .".<p>";
echo "Department:". $department_1->getDepartmentName() .".<p>";
echo "Employee Name:". $employee_1->getEmployeeProfile() .".<br>";
echo"Employee Title:". $employee_1->getEmployeeTitle() .".<br>";
echo"Employee Salary:". $employee_1->getEmployeeMonthlySalary() .".<br>";




?>
