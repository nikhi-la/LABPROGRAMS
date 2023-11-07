#include <stdio.h>
#include <conio.h>

void enQueue();
void deQueue();
void display();

int queue[10];
int front = -1;
int rear = -1;
int maxsize, item;

void main()
{

    int ch;
    clrscr();

    printf("Enter the size of the queue\n");
    scanf("%d", &maxsize);
    do
    {
        printf("\nSelect \n1.To insert\n2.To delete\n3.To display\n4.To exit\n");
        scanf("%d", &ch);
        switch (ch)
        {
        case 1:
            enQueue();
            continue;
        case 2:
            deQueue();
            continue;
        case 3:
            display();
            continue;
        default:
            exit(0);
        }
    } while (ch < 4 && ch > 0);
}

void enQueue()
{

    if ((rear + 1) % maxsize == front)
    {

        printf("Queue Overflow\n");
    }
    else if (front == -1 && rear == -1)
    {

        front++;
        rear++;
        printf("Enter value\n");
        scanf("%d", &item);
        queue[rear] = item;
        printf("Value Inserted\n");
    }
    else
    {

        rear = (rear + 1) % maxsize;
        printf("Enter value\n");
        scanf("%d", &item);
        queue[rear] = item;
        printf("Value Inserted\n");
    }
}

void deQueue()
{

    if (front == -1 && rear == -1)
    {
        printf("Queue Underflow\n");
    }
    else if (front == rear)
    {

        item = queue[front];
        queue[front] = NULL;
        printf("The item deleted is %d\n", item);

        front = -1;
        rear = -1;
    }
    else{

        item = queue[front];
        queue[front] = NULL;
        printf("The item deleted is %d\n", item);

        front=(front+1)%maxsize;

    }
}

void display()
{

    int i;

    printf("The queue is\n");

    for (i = 0; i < maxsize; ++i)
    {

        if (queue[i] == NULL)
        {

            printf("- ");
        }
        else
        {

            printf("%d ", queue[i]);
        }
    }
}