using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace data
{
    public class CarCollection
    {
        List<Car> ds = new List<Car>();


        //ham them 1 chiec xe moi vo ds
        internal void add()
        {
            Car c = new Car();
            c.accept();

            if( ds.FirstOrDefault(item => item.pID == c.pID) == null )
            {
                ds.Add(c);
                Console.WriteLine("Da them xe moi thanh cong !");
            }
            else
            {
                Console.WriteLine("Ma so da ton tai. Tu choi them moi !!!");
            }
        }


        //ham in danh sach xe
        internal void display()
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" HT chua co du lieu !");
                return;
            }
            Console.WriteLine("\n Danh sach xe");
            foreach (var item in ds)
            {
                Console.WriteLine(item);
            }
        }
    }
}
