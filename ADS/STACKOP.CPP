#include <stdio.h>
#include <conio.h>
class stack{
int stack[20];
int top,n;
stack(){
top=-1;
}
void push(){};
void pop(){};
void display(){};
};
void main(){
clrscr();
stack s;
int ch;
printf("Enter the size of stack\n");
scanf("%d",&s.n);
do{
printf("Enter the choice\n1.PUSH\n2.POP\n3.DISPLAY\n4.EXIT\n");
scanf("%d",&ch);
switch(ch){
case 1: s.push();
	break;
case 2: s.pop();
	break;
case 3: s.display();
	break;
case 4: exit;

}
}while(ch<4&&ch>0);
}