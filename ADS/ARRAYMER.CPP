#include <stdio.h>
#include <conio.h>
void main(){
clrscr();
int a[10],b[10],c[20],n1,n2,temp;
printf("Enter the size of array 1\n");
scanf("%d",&n1);
printf("Enter the %d elements\n",n1);
for(int i=0;i<n1;++i){
scanf("%d",&a[i]);
}
for(i=0;i<n1-1;++i){
for(int j=0;j<n1-i-1;++j){
if(a[j]>a[j+1]){
temp=a[j];
a[j]=a[j+1];
a[j+1]=temp;
}
}
}
printf("Array 1\n");
for( i=0;i<n1;++i){
printf("%d ",a[i]);
}
printf("\nEnter the size of array 2\n");
scanf("%d",&n2);
printf("Enter the %d elements\n",n2);
for( i=0;i<n2;++i){
scanf("%d",&b[i]);
}
for(i=0;i<n2-1;++i){
for(int j=0;j<n2-i-1;++j){
if(b[j]>b[j+1]){
temp=b[j];
b[j]=b[j+1];
b[j+1]=temp;
}
}
}
printf("Array 2\n");
for( i=0;i<n2;++i){
printf("%d ",b[i]);
}
i=0;
int j=0;
for(int k=0;k<n1+n2;++k){
if(i<n1&&j<n2){
if(a[i]>b[j]){
c[k]=b[j];
j++;
}
else{
c[k]=a[i];
i++;
}
}
else if(i<n1){
c[k]=a[i];
i++;
}
else {
if(j<n2){
c[k]=b[j];
j++;
}
}
}
printf("\nMerged Array \n");
for(i=0;i<n1+n2;++i){
printf("%d ",c[i]);
}
getch();
}

