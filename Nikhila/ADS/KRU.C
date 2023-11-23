#include <stdio.h>
#include <conio.h>
int parent[10];
void main()
{
    int n,i,j,k,mincost,x,temp,costs,u,v;
	int cost[10][10],t[10][2],heap[10],U[10],V[10];
	clrscr();
	//Enter number of vertices
	printf("Enter number of vertices\n");
	scanf("%d",&n);


	for(i=1;i<=n;++i)
	{
		for(j=1;j<=n;++j)
		{
			cost[i][j]=-1;
		}
	}
	//cost of edges
	x=0;
	for(i=1;i<=n;++i)
	{
		for(j=1;j<=n;++j)
		{
			if(cost[i][j]==-1)
			{
				printf("Enter the cost of edge( %d,%d )",i,j);
				scanf("%d",&cost[i][j]);
				if(cost[i][j]==0)
				{
					cost[i][j]=999; //cost(1,1)=infinity

				}
				else
				{
					heap[x]=cost[i][j];
					U[x]=i;
					V[x]=j;
					x++;
				}
				cost[j][i]=cost[i][j];
			}
		}
	}

	//print cost of edges
	printf("Cost Adjacency Matrix\n");
	for(i=1;i<=n;++i)
	{
		for(j=1;j<=n;++j)
		{
				printf("%d ",cost[i][j]);
		}
		printf("\n");
	}
	for(i=1;i<=n;++i)
	{
		parent[i]=-1;
	}
	for(i=1;i<=n;++i)
	{
		printf("%d ",parent[i]);
	}
	printf("\n");

	for(i=0;i<x;++i){
		/*for(j=i+1;j<=x;++j){
			if(heap[i]>heap[j]){
				temp=heap[i];
				heap[i]=heap[j];
				heap[j]=temp;
			}

		}*/

			printf("%d<- %d-> %d\n",U[i],heap[i],V[i]);
	}
	for(i=0;i<x;++i)
	{
		costs=heap[i];
		heap[i]=0;
		u=U[i];
		v=V[i];
		j=find(u);
		k=find(v);
		printf("%d %d\n",j,k);

	}




	getch();
}

int find(u)
{
	if(parent[u]==-1)
	{
		return u;
	}
	else
	{
		return parent[u];
	}

}