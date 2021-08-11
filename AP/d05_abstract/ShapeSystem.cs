using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_abstract
{
    public class ShapeSystem
    {
        List<Shape> ds = new List<Shape>();

        public void addCircle()
        {
            Shape sh = new CIrcle();
            sh.input();

            ds.Add(sh);
        }

        public void addRectangle()
        {
            Shape sh = new Rectangle();
            sh.input();

            ds.Add(sh);
        }

        public void display()
        {
            if(ds.Count == 0)
            {
                Console.WriteLine(" >> HT chua co du lieu !");
                return;
            }

            Console.WriteLine("\n Danh sach cac doi tuong hinh hoc ");
            foreach (var item in ds)
            {
                item.output();
                Console.WriteLine();
            }
        }

        public void displayCircle()
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" >> HT chua co du lieu !");
                return;
            }

            int cntCircle = 0;
            Console.WriteLine("\n Danh sach cac doi tuong hinh tron ");
            foreach (var item in ds)
            {
                if (item is CIrcle)
                {
                    item.output();
                    cntCircle++;
                }
                
                Console.WriteLine();
            }

            if(cntCircle == 0)
            {
                Console.WriteLine("Ko tim thay !!!");
            }
        }
    }
}
