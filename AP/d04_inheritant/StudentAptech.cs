using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d04_inheritant
{
    public class StudentAptech : Student
    {
        public int grade;

        public StudentAptech():base()
        {
            grade = 70;
        }

        public StudentAptech(string id, string name, bool gender, int diem):base(id, name, gender)
        {
            this.grade = diem;
        }

        public override void input()
        {
            base.input();   //goi ham input() cua lop cha Student de nhap 3 thuoc tinh id, name, gender

            while (true)
            {
                try
                {
                    Console.Write(" nhap diem ket qua [0-100]:");
                    grade = int.Parse(Console.ReadLine().Trim());
                    if (grade >= 0 && grade <= 100) break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi " + e.Message); 
                }
            }
        }

        public override string ToString()
        {
            string sGen = gender ? "nam" : "nu";
            return $"{id}, {name}, {sGen}, {grade}";
        }
    }
}
