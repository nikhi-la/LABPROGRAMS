#include <stdio.h>
#include <conio.h>
void main()
{
    int n,i,j,k,mincost,x,temp;
	int cost[10][10],t[10][2],parent[10],heap[10];
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
	for(i=0;i<x;++i)
	{
	printf("%d ",heap[i]);
	}
	for(i=0;i<x;++i)
		{
		if(heap[i]>heap[i+1])
			{
			temp=heap[i];
			heap[i]=heap[i+1];
			heap[i+1]=temp;

			}
			printf("%d ",heap[i]);
		}


	getch();
}