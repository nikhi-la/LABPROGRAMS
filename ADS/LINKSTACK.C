#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

void push();
void pop();
void display();
void search();

struct node{
    int data;
    struct node *next;
}*top=NULL;

void main(){

    int ch;
    clrscr();
    do{
    printf("SELECT\n1.Insert\n2.Delete\n3.Search\n4.Display\n5.Exit\n");
    scanf("%d",&ch);
    switch(ch){
        case 1: push();
            	continue;
        case 2: pop();
            	continue;
        case 3: search();
                continue;
        case 4: display();
            	continue;
        default: exit(0);

}
    }while(ch<5&&ch>0);
}

void push(){

    struct node *newnode;
    int value;

    printf("Enter value to be inserted\n");
    scanf("%d",&value);

    if(top==NULL)
    {
        top=malloc(sizeof(struct node));
        top->data=value;
        top->next=NULL;
        printf("Node Inserted\n");
        
    }
    else
    {
        newnode=malloc(sizeof(struct node));
	newnode->data=value;
	newnode->next=top;
	top=newnode;

	printf("Node Inserted\n");

    }
}

void pop(){

    struct node *temp;

    if(top==NULL||top->data==NULL){
	printf("Stack Empty\n");
	return;

    }
    else{
        temp=top;
        top=top->next;
        printf("Node %d deleted\n",temp->data);
        free(temp);
    }

}

void display(){

    struct node *curr;

    if(top==NULL){
        printf("Stack Empty\n");
	return;
    }
    else{

	printf("Stack is\n");

        curr=top;

        while(curr!=NULL)
        {
	    printf("%d\n",curr->data);
            curr=curr->next;
        }
    }
}

void search(){

    struct node *curr;
    int pos,value,flag;

    if(top==NULL){
        printf("Stack Empty\n");
	return;
    }
    else{

        printf("Enter the value to be searched\n");
        scanf("%d",&value);

        curr=top;
        pos=0;
        flag=0;
        while(curr!=NULL)
        {
	    if(curr->data==value)
        {
            pos++;
            printf("%d found at position %d\n",value,pos);
            flag=1;
            return;
        }
        else{
            curr=curr->next;
	}

	}

	if(flag==0)
	    printf("%d not found \n",pos);
    }
}