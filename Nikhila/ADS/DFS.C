#include <stdio.h>
#include <conio.h>

int i,j,n,a;
int stack[10],top=-1,cost[10][10],v,visited[10],newarr[10],x=0;
int dfs(int);
void main()
{

	clrscr();

	printf("Enter the number of nodes\n");
	scanf("%d",&n);
	for(i=1;i<=n;++i)
	 {
		visited[i]=0;
	 }

	printf("Enter cost adjacency matrix\n");
	for (i=1;i<=n;++i)
	{
		for(j=i;j<=n;++j)
		{
			printf("Enter cost( %d,%d )\n",i,j);
			scanf("%d",&cost[i][j]);
			cost[j][i]=cost[i][j];
		}
	}
	for (i=1;i<=n;++i)
	{
		for(j=1;j<=n;++j)
		{
			printf("%d ",cost[i][j]);
		}
		printf("\n");
	}
	printf("Enter the starting vertex\n");
	scanf("%d",&v);
	visited[v]=1;
	top++;
	stack[top]=v;
	a=dfs(v);
	printf("Visited Array\n");
	for(j=1;j<=n;++j)
		{
			printf("%d ",visited[j]);
		}
		printf("Stack Array\n");
		for(j=n-1;j>=0;--j)
		{
			printf("%d\n",stack[j]);
		}
		printf("New Array\n");
		for(j=1;j<=n;++j)
		{
			printf("%d\n",newarr[j]);
		}

	getch();

}

int dfs(int v)
{
	for(i=1;i<=n;++i)
	{
		if(cost[v][i]>0 && !visited[i])
		{
			top++;
			visited[i]=1;
			stack[top]=i;
			dfs(top);
		}


	}

		x++;
		newarr[x]=stack[top];
		top--;
	return top;

}