class Student6
{
String name;
int age;
}
class Student1 extends Student6
{
String address;
public void m1(String name, int age, String address)
{
this.name=name;
this.age=age;
this.address=address;
}
public void display()
{
System.out.println(name);
System.out.println(age);
System.out.println(address);
}
public static void main(String[]args)
{
Student6 S1=new Student6("Anusha",21,"Hyderabad");
S1.display();
}
}