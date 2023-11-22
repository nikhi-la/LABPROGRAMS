#include <stdio.h>
#include <conio.h>

void main()
{
	int n,i,j,mincost,min;
	int cost[10][10],t[10][2];
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

	for(i=1;i<=n;++i)
	{
		for(j=1;j<=n;++j)
		{
			if(cost[i][j]==-1)
			{
				printf("Enter the cost of edge( %d,%d )",i,j);
				scanf("%d",&cost[i][j]);
				if(cost[i][j]==0)
					cost[i][j]=999; //cost(1,1)=infinity
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

	min=999;
	for(i=1;i<=n;++i)
	{
	    for(j=1;j<=n;++j)
	    {
		if(cost[i][j]<min)
		{
			mincost=cost[i][j];
			min=mincost;
			t[1][1]=k=i;
			t[1][2]=l=j;
		}
	    }
	}
	printf("\nMincost : %d , k : %d, l : %d ",mincost,t[1][1],t[1][2]);

	//initialize near

	for(i=1;i<=n;++i)
	{
		if(cost[i][l]<cost[i][k])
			near[i]=l;
		else
			near[i]=k;
	}
	near[l]=near[k]=0;

	for(i=2;i<=n-1;++i)
	{
		for(j=1;j<=n;++j)
		{
			if(near[j]!=0 && )
		}
	}

getch();
}