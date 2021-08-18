using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d07_adv_concept
{
    public class DemoLambda
    {
        internal void demo1()
        {
            Func<int, long> fncasio = delegate (int n)
            {
                long r = 1;
                for (int i = 2; i <= n; i++)
                {
                    r *= i;
                }
                return r;
            };

            Console.Write("nhap so nguyen : ");
            int x = int.Parse(Console.ReadLine().Trim());
            Console.WriteLine($">> {x}! = {fncasio(x)}");

        }


        internal void demo2()
        {
            Func<int, long> fncasio = (n) =>
            {
                long r = 1;
                for (int i = 2; i <= n; i++)
                {
                    r *= i;
                }
                return r;
            };

            Console.Write("nhap so nguyen : ");
            int x = int.Parse(Console.ReadLine().Trim());
            Console.WriteLine($">> {x}! = {fncasio(x)}");

        }

        internal void demo3()
        {
            List<Product> ds = new List<Product>
            {
                new Product(){id = "P1", name="laptop", price=1000, qoh=2},
                new Product(){id = "P2", name="monitor", price=200, qoh=22},
                new Product(){id = "P4", name="mouse", price=15, qoh=4},
                new Product(){id = "P5", name="hdd", price=300, qoh=5},
                new Product(){id = "P6", name="usb", price=30, qoh=40 },
                new Product(){id = "P7", name="tablet pc", price=500, qoh=12},
                new Product(){id = "P8", name="charge", price=100, qoh=20}
            };

            Console.WriteLine("\n Danh sach san pham");
            foreach (var item in ds)
            {
                Console.WriteLine(item);
            }

            
            var cnt20 = ds.FindAll(x => x.qoh >= 20).Count;
            if( cnt20 == 0)
            {
                Console.WriteLine("Ko tim thay sp co so luong ton kho >=20 !");
            }
            else {

                Console.WriteLine("\n Danh sach san pham co so luong ton kho >=20");
                foreach (var item in ds.FindAll(x => x.qoh >= 20))
                {
                    Console.WriteLine(item);
                }
                var sum = ds.FindAll(x=>x.qoh>=20).Sum(x => x.qoh * x.price);
                Console.WriteLine($">> Tri gia ton kho: {sum}");
            }



        }
    }

    public class Product
    {
        public string id, name;
        public int price, qoh;

        public override string ToString()
        {
            return $"{id}, {name}, {price}, {qoh} , {price * qoh}";
        }
    }
}
