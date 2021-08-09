using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d04_inheritant
{
    public class Student
    {
        public string id, name;
        public bool gender;

        public Student()
        {
            id = "s1"; name = "quoc thang";
            gender = true;
        }

        public Student(string id, string name, bool gender)
        {
            this.id = id;
            this.name = name;
            this.gender = gender;
        }

        public virtual void input()
        {
            Console.Write(" nhap id: "); id = Console.ReadLine().Trim();
            Console.Write(" nhap ten: "); name = Console.ReadLine().Trim();
            Console.Write(" nhap gioi tinh (nam/nu): "); gender = Console.ReadLine().Trim().ToLower().Equals("nam");
        }
    }
}
