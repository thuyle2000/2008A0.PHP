using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_property
{
    class Program
    {
        static void Main(string[] args)
        {
            //testProduct();

            //khoi tao gia tri cua field thong qua cu phap object initializers
            Student sv = new Student() { pID = "SV01", pName = "Phuc Thinh", pMark = 89 };
            Console.WriteLine(sv);
        }

        static void testStudent()
        {
            Student sv = new Student();
            sv.pID = "SV01";
            Console.WriteLine(sv);

            sv.pName = "Cong Hau";
            Console.WriteLine(sv);

            sv.pMark = 77;
            Console.WriteLine(sv);
        }

        static void testProduct()
        {
            Product p = new Product();
            while (true)
            {
                try
                {
                    Console.Write(" nhap id : ");
                    p.pID = Console.ReadLine().Trim();
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }


            while (true)
            {
                try
                {
                    Console.Write(" nhap ten san pahm : ");
                    p.pName= Console.ReadLine().Trim();
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }

            while (true)
            {
                try
                {
                    Console.Write(" nhap don gia san pham : ");
                    p.pPrice = int.Parse( Console.ReadLine().Trim() );
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }

            Console.WriteLine(p);

        }
    }
}
