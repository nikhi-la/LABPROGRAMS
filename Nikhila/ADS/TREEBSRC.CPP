#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

void insert_node(struct node *root,int data);
void inorder(struct node *root);

struct node{
	int data;
	struct node *left,*right;
} *root;

void main(){

	int ch,data;

	clrscr();
	do{
	printf("SELECT\n1.Insert Node\n2.Delete Node\n3.Preorder Traversal\n4.Inorder Traversal\n5.Postorder Traversal\n6.Exit\n");
	scanf("%d",&ch);

	switch(ch){

		case 1: printf("Enter node value\n");
			scanf("%d",&data);
			insert_node(root,data);
			break;
	       //	case 2: delete_node();
	       //		break();
	       //	case 3: preorder();
	       //		break;
		case 4: inorder(root);
			break;
	      //	case 5: postorder();
	       //		break;
		default: exit(0);
	}

	}while(ch!=0);

}
void insert_node(struct node *root,int data){


	if(root==NULL){
	root=malloc(sizeof(struct node));

		root->data=data;
		root->left=NULL;
		root->right=NULL;

	}

	else if(data<root->data){

		root=root->left;
		insert_node(root,data);
	}
	else{
		root=root->right;
		insert_node(root,data);
	}


}

void inorder(struct node *root){
if(root==NULL){
	printf("Empty\n");
	return;
}

       inorder(root->left);
       printf("%d ",root->data);
       inorder(root->right);


}