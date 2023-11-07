#include <stdio.h>
#include <conio.h>

void insertion(int a[10]);
void deletion(int a[10]);
void display(int a[10]);
int n=0;
void main(){
int ch,a[10],i;
clrscr();
printf("Enter the array size\n");
scanf("%d",&n);
printf("Enter %d elements\n",n);
for(i=0;i<n;++i)
scanf("%d",&a[i]);
do{
printf("\nSelect \n1.To insert\n2.To delete\n3.To display\n4.To exit\n");
scanf("%d",&ch);
switch(ch){
case 1: insertion(a);
	continue;
case 2: deletion(a);
	continue;
case 3: display(a);
	continue;
default:break;
}
}while(ch<4&&ch>0);
}

void insertion(int a[10])
{
int pos,num,i;
printf("Enter the position and number to be inserted\n");
scanf("%d%d",&pos,&num);
if(pos<0||pos>n+1)
{
printf("Invalid Position");
return;
}
pos--;
for(i=n;i>=pos+1;--i)
a[i]=a[i-1];
a[pos]=num;
n++;
}

void deletion(int a[10]){
int pos,i;
printf("Enter the position to be deleted\n");
scanf("%d",&pos);
if(pos<0||pos>n)
{
printf("Invalid Position");
return;
}
pos--;
for(i=pos;i<n;++i)
a[i]=a[i+1];
n--;
}

void display(int a[10]){
int i;
for(i=0;i<n;++i)
printf("%d ",a[i]);
}