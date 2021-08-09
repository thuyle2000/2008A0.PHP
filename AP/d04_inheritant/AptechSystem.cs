using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d04_inheritant
{
    //quan ly danh sach sinh vien Aptech
    public class AptechSystem
    {
        List<StudentAptech> ds = new List<StudentAptech>();

        //ham them 1 sinh vien moi
        internal void add()
        {
            StudentAptech sa = new StudentAptech();
            sa.input();

            ds.Add(sa);
            Console.WriteLine("Da them sv moi vo he thong !");
        }

        //ham in toan bo danh sach sinh vien
        internal void display()
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" HT chua co du lieu !");
                return;
            }

            Console.WriteLine("\n Danh sach Sinh Vien");
            foreach (var item in ds)
            {
                Console.WriteLine(item);
            }

        }


        //ham in toan bo danh sach sinh vien theo gioi tinh
        internal void display(bool gen)
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" HT chua co du lieu !");
                return;
            }


            Console.WriteLine("\n Danh sach Sinh Vien " + (gen?" Nam":" Nu"));
            int cntGen = 0;
            foreach (var item in ds.FindAll(x=> x.gender== gen))
            {
                Console.WriteLine(item);
                cntGen++;
            }

            if(cntGen == 0)
            {
                Console.WriteLine("Ko tim thay !");
            }

        }


        //ham in toan bo danh sach sinh vien theo diem thi
        internal void display(int mark)
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" HT chua co du lieu !");
                return;
            }


            Console.WriteLine($"\n Danh sach Sinh Vien co diem >= {mark} ");
            int cntGen = 0;
            foreach (var item in ds.FindAll(x => x.grade >= mark))
            {
                Console.WriteLine(item);
                cntGen++;
            }

            if (cntGen == 0)
            {
                Console.WriteLine("Ko tim thay !");
            }

        }
    }
}
