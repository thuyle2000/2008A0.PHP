using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_property
{
    public class Student
    {
        // bo tu truy xuat dang dc ap dung cho 3 fields : private
        string id, name;
        int mark;

        // tao 1 property [pID] tham chieu field id
        public string pID
        {
            //tra ve gia tri cua field id
            get { return id; }

            //gan gia tri cua property (value) cho field id
            set
            {
                id = value;
            }
        }



        //tao 1 property [pName] cho field name
        public string pName
        {
            get { return name; }
            set { name = value; }
        }

        //tao 1 property [pMark] cho field mark
        public int pMark
        {
            get { return mark; }
            set { mark = value; }
        }

        public override string ToString()
        {
            return $"id: {id}, ten: {name}, diem: {mark}";
        }
    }
}
