using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_interface
{
    class Program
    {
        static void Main(string[] args)
        {


            ProductCatalog a = new ProductCatalog();
            string op = "";

            while (true)
            {
                Console.WriteLine("\n === MENU ===");
                Console.WriteLine("1. Them san pham");
                Console.WriteLine("2. In danh sach san pham");
                Console.WriteLine("3. Ket thuc ");
                Console.Write(" >> nhap ma so chuc nang [1-3]: ");

                op = Console.ReadLine().Trim();
                switch (op)
                {
                    case "1":
                        a.add(); break;
                    case "2":
                        a.display(); break;
                    case "3":
                        return;
                    default:
                        break;
                }


            }

        }
    }

    public class ProductCatalog
    {
        List<Product> ds = new List<Product>();

        public void add()
        {
            Product p = new Product();
            p.Input();

            ds.Add(p);
            Console.WriteLine("Them san pham thanh cong");
        }

        public void display()
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" >> HT chua co du lieu");
                return;
            }
            Console.WriteLine("\n Danh sach san pham ");
            foreach (var item in ds)
            {
                Console.WriteLine(item);
            }
        }

    }
}
