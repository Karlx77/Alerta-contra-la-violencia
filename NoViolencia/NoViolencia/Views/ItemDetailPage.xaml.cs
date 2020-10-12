using System.ComponentModel;
using Xamarin.Forms;
using NoViolencia.ViewModels;

namespace NoViolencia.Views
{
    public partial class ItemDetailPage : ContentPage
    {
        public ItemDetailPage()
        {
            InitializeComponent();
            BindingContext = new ItemDetailViewModel();
        }
    }
}