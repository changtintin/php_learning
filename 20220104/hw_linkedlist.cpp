#include<iostream>
#include<string>
using namespace std;
template <class T>
class NodeStaff{
    public:
        T working_experience;

    public:
        NodeStaff();

    public:
        Append();
};

template<class T>
NodeStaff<T>::NodeStaff(){
    next = null;
    working_experience = 0;
};

template <class T>
class ExperienceList{
    NodeStaff * head;
    NodeStaff * last;

    public:
    ExperienceList();

    public:
    void insert(T);
    void show();
    void delete();
    void reverse();
};

template<class T>
ExperienceList<T>::ExperienceList(){
    head = NULL;
};

template<class T>
void ExperienceList<T>::insert(T years){
    
};


int main(){
    ExperienceList<int> firmlist;

    
}
