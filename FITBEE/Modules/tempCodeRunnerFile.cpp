#include<iostream>
using namespace std;
void binRecSearch(int[],int,int,int);
{
    int mid;
    if(first>last)
    {
        return 0;
    }
    mid=(first+last)/2;
    if(array[mid]==num)
    {
        return mid+1;
    }else if(array[mid]>num)
    {
        return(array,first,mid-1,num);
    }
    else(array[mid]<num)
    {
        return(array,mid+1,last,num);
    }
}
int main()
{
    int array[8],first,last,num;
    cout<<"Enter 8 items:"<<endl;
    cin>>array[];
    array[1]=first;
    array[8]=last;
    cout<<"Enter the number you want to search:"<<endl;
    cin>>num;
    binRecSearch(int array[],first,last,num);
   return 0;
}