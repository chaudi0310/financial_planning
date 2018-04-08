-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 08:34 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uno`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `accounttype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `accounttype`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anual_maintenance`
--

CREATE TABLE `anual_maintenance` (
  `id` int(11) NOT NULL,
  `factor_cap_equip` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anual_maintenance`
--

INSERT INTO `anual_maintenance` (`id`, `factor_cap_equip`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `asset_depreciation`
--

CREATE TABLE `asset_depreciation` (
  `id` int(11) NOT NULL,
  `num_of_years` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_depreciation`
--

INSERT INTO `asset_depreciation` (`id`, `num_of_years`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow_financing_activities`
--

CREATE TABLE `cash_flow_financing_activities` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow_financing_activities`
--

INSERT INTO `cash_flow_financing_activities` (`id`, `target`, `value`) VALUES
(1, 'preferred stock', 0),
(2, 'total cash dividends', 0),
(3, 'common stock', 0),
(4, 'other financing cash flow items', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow_investing_activities`
--

CREATE TABLE `cash_flow_investing_activities` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow_investing_activities`
--

INSERT INTO `cash_flow_investing_activities` (`id`, `target`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 'Acquisition of business', 0, 0, 0, 0, 0),
(2, 'Sale of fixed assets', 0, 0, 0, 0, 0),
(3, 'Other investing cash flow items', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow_operating_activities`
--

CREATE TABLE `cash_flow_operating_activities` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow_operating_activities`
--

INSERT INTO `cash_flow_operating_activities` (`id`, `target`, `value`) VALUES
(1, 'amortization', 0),
(2, 'other liabilities', 0),
(3, 'Other operating cash flow items', 0);

-- --------------------------------------------------------

--
-- Table structure for table `current_assets`
--

CREATE TABLE `current_assets` (
  `id` int(11) NOT NULL,
  `asset_name` text NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_assets`
--

INSERT INTO `current_assets` (`id`, `asset_name`, `balance`) VALUES
(1, 'Cash and short-term investments', 50000),
(2, 'accounts receivable', 3000),
(3, 'total inventory', 25000),
(4, 'prepaid expenses', 0),
(5, 'deferred income tax', 0),
(6, 'Other current assets', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `current_liabilities`
--

CREATE TABLE `current_liabilities` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `initial_balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_liabilities`
--

INSERT INTO `current_liabilities` (`id`, `target`, `initial_balance`) VALUES
(1, 'Accounts Payable', 2000),
(2, 'Accrued Expenses', 0),
(3, 'Notes Payable', 0),
(4, 'Capital Leases', 0),
(5, 'Other Current Liablities', 100);

-- --------------------------------------------------------

--
-- Table structure for table `debt`
--

CREATE TABLE `debt` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `initial_balance` double NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debt`
--

INSERT INTO `debt` (`id`, `target`, `initial_balance`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 'other long term debt', 100000, 200000, 150000, 175000, 225000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `ending_cash_balance`
--

CREATE TABLE `ending_cash_balance` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ending_cash_balance`
--

INSERT INTO `ending_cash_balance` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 155189.55972793, 110559.56334226, 141116.4462873, 197797.14499959, 130690.34601543);

-- --------------------------------------------------------

--
-- Table structure for table `equity`
--

CREATE TABLE `equity` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `year1` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equity`
--

INSERT INTO `equity` (`id`, `target`, `year1`) VALUES
(1, 'Owner\'s Equity', 50000),
(2, 'Paid-in capital', 250000),
(3, 'preferred equity', 0),
(4, 'retained earnings', 0);

-- --------------------------------------------------------

--
-- Table structure for table `funding`
--

CREATE TABLE `funding` (
  `id` int(11) NOT NULL,
  `loan_amount` double NOT NULL,
  `anual_interest_rate` double NOT NULL,
  `term_of_loan` double NOT NULL,
  `monthly_rate` double NOT NULL,
  `payment` double NOT NULL,
  `total_amount_payable` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funding`
--

INSERT INTO `funding` (`id`, `loan_amount`, `anual_interest_rate`, `term_of_loan`, `monthly_rate`, `payment`, `total_amount_payable`) VALUES
(1, 50000, 5, 60, 0.40741237836484, 941.01991847774, 56461.195108665);

-- --------------------------------------------------------

--
-- Table structure for table `income-cost-of-sales`
--

CREATE TABLE `income-cost-of-sales` (
  `id` int(11) NOT NULL,
  `product` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income-cost-of-sales`
--

INSERT INTO `income-cost-of-sales` (`id`, `product`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(4, 'Product 1', 9375, 9562.5, 9945, 10541.7, 11385.036),
(5, 'Product 2', 10750, 10965, 11403.6, 12087.816, 13054.84128),
(6, 'Product 3', 3412.5, 3480.75, 3619.98, 3837.1788, 4144.153104),
(7, 'Product 4', 4050, 4131, 4296.24, 4554.0144, 4918.335552);

-- --------------------------------------------------------

--
-- Table structure for table `income-revenue`
--

CREATE TABLE `income-revenue` (
  `id` int(11) NOT NULL,
  `product` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income-revenue`
--

INSERT INTO `income-revenue` (`id`, `product`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(6, 'Product 1', 31250, 31875, 33150, 35139, 37950.12),
(7, 'Product 2', 43000, 43860, 45614.4, 48351.264, 52219.36512),
(8, 'Product 3', 13650, 13923, 14479.92, 15348.7152, 16576.612416),
(9, 'Product 4', 13500, 13770, 14320.8, 15180.048, 16394.45184);

-- --------------------------------------------------------

--
-- Table structure for table `inflation`
--

CREATE TABLE `inflation` (
  `id` int(11) NOT NULL,
  `anual_inflation_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inflation`
--

INSERT INTO `inflation` (`id`, `anual_inflation_rate`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `interest_income`
--

CREATE TABLE `interest_income` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest_income`
--

INSERT INTO `interest_income` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loan-payment-calculator`
--

CREATE TABLE `loan-payment-calculator` (
  `id` int(11) NOT NULL,
  `month` text NOT NULL,
  `balance` double NOT NULL,
  `scheduled_payment` double NOT NULL,
  `principal` double NOT NULL,
  `interest` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan-payment-calculator`
--

INSERT INTO `loan-payment-calculator` (`id`, `month`, `balance`, `scheduled_payment`, `principal`, `interest`) VALUES
(1, '1', 50000, 941.01991847774, 737.31381081758, 203.70618918242),
(2, '2', 49262.686189182, 941.01991847774, 740.31771855025, 200.70228144975),
(3, '3', 48522.368470632, 941.01991847774, 743.33386457485, 197.68613542515),
(4, '4', 47779.034606057, 941.01991847774, 746.3622987517, 194.6577012483),
(5, '5', 47032.672307306, 941.01991847774, 749.40307114427, 191.61692885573),
(6, '6', 46283.269236161, 941.01991847774, 752.45623201995, 188.56376798005),
(7, '7', 45530.813004141, 941.01991847774, 755.52183185098, 185.49816814902),
(8, '8', 44775.29117229, 941.01991847774, 758.59992131519, 182.42007868481),
(9, '9', 44016.691250975, 941.01991847774, 761.6905512969, 179.3294487031),
(10, '10', 43255.000699678, 941.01991847774, 764.79377288771, 176.22622711229),
(11, '11', 42490.206926791, 941.01991847774, 767.90963738742, 173.11036261258),
(12, '12', 41722.297289403, 941.01991847774, 771.0381963048, 169.9818036952),
(13, '13', 40951.259093098, 941.01991847774, 774.17950135846, 166.84049864154),
(14, '14', 40177.07959174, 941.01991847774, 777.33360447776, 163.68639552224),
(15, '15', 39399.745987262, 941.01991847774, 780.50055780359, 160.51944219641),
(16, '16', 38619.245429459, 941.01991847774, 783.68041368929, 157.33958631071),
(17, '17', 37835.565015769, 941.01991847774, 786.87322470148, 154.14677529852),
(18, '18', 37048.691791068, 941.01991847774, 790.07904362095, 150.94095637905),
(19, '19', 36258.612747447, 941.01991847774, 793.29792344353, 147.72207655647),
(20, '20', 35465.314824003, 941.01991847774, 796.52991738095, 144.49008261905),
(21, '21', 34668.784906622, 941.01991847774, 799.77507886174, 141.24492113826),
(22, '22', 33869.009827761, 941.01991847774, 803.0334615321, 137.9865384679),
(23, '23', 33065.976366229, 941.01991847774, 806.30511925679, 134.71488074321),
(24, '24', 32259.671246972, 941.01991847774, 809.59010612004, 131.42989387996),
(25, '25', 31450.081140852, 941.01991847774, 812.88847642639, 128.13152357361),
(26, '26', 30637.192664425, 941.01991847774, 816.20028470165, 124.81971529835),
(27, '27', 29820.992379724, 941.01991847774, 819.52558569377, 121.49441430623),
(28, '28', 29001.46679403, 941.01991847774, 822.86443437375, 118.15556562625),
(29, '29', 28178.602359656, 941.01991847774, 826.21688593656, 114.80311406344),
(30, '30', 27352.38547372, 941.01991847774, 829.582995802, 111.437004198),
(31, '31', 26522.802477918, 941.01991847774, 832.96281961571, 108.05718038429),
(32, '32', 25689.839658302, 941.01991847774, 836.35641325, 104.66358675),
(33, '33', 24853.483245052, 941.01991847774, 839.76383280483, 101.25616719517),
(34, '34', 24013.719412247, 941.01991847774, 843.18513460871, 97.834865391294),
(35, '35', 23170.534277638, 941.01991847774, 846.62037521963, 94.399624780366),
(36, '36', 22323.913902419, 941.01991847774, 850.06961142604, 90.950388573962),
(37, '37', 21473.844290993, 941.01991847774, 853.53290024771, 87.487099752295),
(38, '38', 20620.311390745, 941.01991847774, 857.01029893673, 84.009701063269),
(39, '39', 19763.301091808, 941.01991847774, 860.50186497846, 80.518135021539),
(40, '40', 18902.79922683, 941.01991847774, 864.00765609244, 77.012343907557),
(41, '41', 18038.791570737, 941.01991847774, 867.52773023338, 73.492269766616),
(42, '42', 17171.263840504, 941.01991847774, 871.0621455921, 69.957854407898),
(43, '43', 16300.201694912, 941.01991847774, 874.61096059649, 66.409039403506),
(44, '44', 15425.590734315, 941.01991847774, 878.1742339125, 62.8457660875),
(45, '45', 14547.416500403, 941.01991847774, 881.75202444507, 59.26797555493),
(46, '46', 13665.664475958, 941.01991847774, 885.34439133914, 55.675608660858),
(47, '47', 12780.320084619, 941.01991847774, 888.95139398062, 52.068606019384),
(48, '48', 11891.368690638, 941.01991847774, 892.57309199734, 48.44690800266),
(49, '49', 10998.795598641, 941.01991847774, 896.20954526009, 44.810454739909),
(50, '50', 10102.586053381, 941.01991847774, 899.86081388357, 41.159186116432),
(51, '51', 9202.725239497, 941.01991847774, 903.52695822738, 37.493041772616),
(52, '52', 8299.1982812696, 941.01991847774, 907.20803889707, 33.811961102934),
(53, '53', 7391.9902423726, 941.01991847774, 910.90411674505, 30.115883254947),
(54, '54', 6481.0861256275, 941.01991847774, 914.61525287171, 26.404747128292),
(55, '55', 5566.4708727558, 941.01991847774, 918.34150862632, 22.67849137368),
(56, '56', 4648.1293641295, 941.01991847774, 922.08294560813, 18.937054391874),
(57, '57', 3726.0464185214, 941.01991847774, 925.83962566732, 15.180374332676),
(58, '58', 2800.206792854, 941.01991847774, 929.6116109061, 11.4083890939),
(59, '59', 1870.5951819479, 941.01991847774, 933.39896367965, 7.6210363203521),
(60, '60', 937.19621826829, 941.01991847774, 937.20174659721, 3.8182534027921);

-- --------------------------------------------------------

--
-- Table structure for table `loss_on_sales_assets`
--

CREATE TABLE `loss_on_sales_assets` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loss_on_sales_assets`
--

INSERT INTO `loss_on_sales_assets` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 0, 0, 1000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `model_inputs_totals`
--

CREATE TABLE `model_inputs_totals` (
  `id` int(11) NOT NULL,
  `total_fr` double NOT NULL,
  `total_cog` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_inputs_totals`
--

INSERT INTO `model_inputs_totals` (`id`, `total_fr`, `total_cog`) VALUES
(1, 101400, 27587.5);

-- --------------------------------------------------------

--
-- Table structure for table `operating_expenses`
--

CREATE TABLE `operating_expenses` (
  `id` int(11) NOT NULL,
  `operating_expense` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operating_expenses`
--

INSERT INTO `operating_expenses` (`id`, `operating_expense`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 'Sales and Marketing', 15000, 15300, 15912, 16866.72, 18216.0576),
(2, 'Depreciation', 6000, 6120, 6240, 6360, 6480),
(3, 'Insurance', 7500, 7650, 7956, 8433.36, 9108.0288),
(4, 'Payroll and Tax', 21000, 21420, 22276.8, 23613.408, 25502.48064),
(5, 'Property taxes', 2500, 2550, 2652, 2811.12, 3036.0096),
(6, 'Maintenance, repair, and overhaul', 1500, 1530, 1560, 1590, 1620),
(7, 'Utilities', 5000, 5100, 5304, 5622.24, 6072.0192),
(8, 'Administrative fees', 300, 306, 318.24, 337.3344, 364.321152),
(9, 'Interest expense on long-term debt\r\n', 2243.4990930984, 1791.06204775332, 1316.003150140962, 817.191307648012, 293.4388730304042),
(10, 'Other', 1000, 1020, 1060.8, 1124.448, 1214.40384);

-- --------------------------------------------------------

--
-- Table structure for table `other_assets`
--

CREATE TABLE `other_assets` (
  `id` int(11) NOT NULL,
  `target` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_assets`
--

INSERT INTO `other_assets` (`id`, `target`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 'Goodwill', 0, 0, 0, 0, 0),
(2, 'Long term investments', 0, 0, 0, 0, 0),
(3, 'deposits', 0, 0, 0, 0, 0),
(4, 'other long term assets', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `other_income`
--

CREATE TABLE `other_income` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_income`
--

INSERT INTO `other_income` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `other_liabilities`
--

CREATE TABLE `other_liabilities` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_liabilities`
--

INSERT INTO `other_liabilities` (`id`, `name`, `value`) VALUES
(1, 'liabilities from carla', 0),
(2, 'liabilities from jessica', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pl_othertax`
--

CREATE TABLE `pl_othertax` (
  `id` int(11) NOT NULL,
  `y1` double NOT NULL,
  `y2` double NOT NULL,
  `y3` double NOT NULL,
  `y4` double NOT NULL,
  `y5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl_othertax`
--

INSERT INTO `pl_othertax` (`id`, `y1`, `y2`, `y3`, `y4`, `y5`) VALUES
(1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` double NOT NULL,
  `sold_anual` text NOT NULL,
  `gross_margin` text NOT NULL,
  `anual_rev` double NOT NULL,
  `anual_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `sold_anual`, `gross_margin`, `anual_rev`, `anual_cost`) VALUES
(14, 'Product 1', 125, '250', '30', 31250, 9375),
(15, 'Product 2', 100, '430', '25', 43000, 10750),
(16, 'Product 3', 65, '210', '25', 13650, 3412.5),
(17, 'Product 4', 25, '540', '30', 13500, 4050);

-- --------------------------------------------------------

--
-- Table structure for table `product_price_increase`
--

CREATE TABLE `product_price_increase` (
  `id` int(11) NOT NULL,
  `anual_price_increase` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_price_increase`
--

INSERT INTO `product_price_increase` (`id`, `anual_price_increase`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profits_loss_expense_increase`
--

CREATE TABLE `profits_loss_expense_increase` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profits_loss_expense_increase`
--

INSERT INTO `profits_loss_expense_increase` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 0, 2, 4, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `profits_loss_revenue_increase`
--

CREATE TABLE `profits_loss_revenue_increase` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profits_loss_revenue_increase`
--

INSERT INTO `profits_loss_revenue_increase` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 0, 2, 4, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `properties_equipment`
--

CREATE TABLE `properties_equipment` (
  `id` int(11) NOT NULL,
  `properties` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL,
  `initial_balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties_equipment`
--

INSERT INTO `properties_equipment` (`id`, `properties`, `year1`, `year2`, `year3`, `year4`, `year5`, `initial_balance`) VALUES
(1, 'buildings', 20000, 20000, 20000, 20000, 20000, 0),
(2, 'land', 10000, 10000, 10000, 10000, 10000, 0),
(3, 'capital improvements', 0, 0, 0, 0, 0, 0),
(4, 'machinery and equipment', 10000, 10000, 10000, 10000, 10000, 0),
(5, 'less accumulated depreciation expense', 6000, 12120, 18360, 24720, 31200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recurring_expenses`
--

CREATE TABLE `recurring_expenses` (
  `id` int(11) NOT NULL,
  `non_rec_expense` text NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recurring_expenses`
--

INSERT INTO `recurring_expenses` (`id`, `non_rec_expense`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 'Unexpected Expense', 0, 0, 0, 0, 0),
(2, 'Other Expense', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `retained_earnings`
--

CREATE TABLE `retained_earnings` (
  `id` int(11) NOT NULL,
  `year1` double NOT NULL,
  `year2` double NOT NULL,
  `year3` double NOT NULL,
  `year4` double NOT NULL,
  `year5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retained_earnings`
--

INSERT INTO `retained_earnings` (`id`, `year1`, `year2`, `year3`, `year4`, `year5`) VALUES
(1, 8238.3006348311, 8751.1815665727, 10293.119794901, 10795.747404646, 12411.996614479);

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `anual_tax_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `anual_tax_rate`) VALUES
(1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `total_non_rec_ex`
--

CREATE TABLE `total_non_rec_ex` (
  `id` int(11) NOT NULL,
  `y1` double NOT NULL,
  `y2` double NOT NULL,
  `y3` double NOT NULL,
  `y4` double NOT NULL,
  `y5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_non_rec_ex`
--

INSERT INTO `total_non_rec_ex` (`id`, `y1`, `y2`, `y3`, `y4`, `y5`) VALUES
(1, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anual_maintenance`
--
ALTER TABLE `anual_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_depreciation`
--
ALTER TABLE `asset_depreciation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow_financing_activities`
--
ALTER TABLE `cash_flow_financing_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow_investing_activities`
--
ALTER TABLE `cash_flow_investing_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_flow_operating_activities`
--
ALTER TABLE `cash_flow_operating_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_assets`
--
ALTER TABLE `current_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_liabilities`
--
ALTER TABLE `current_liabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debt`
--
ALTER TABLE `debt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ending_cash_balance`
--
ALTER TABLE `ending_cash_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equity`
--
ALTER TABLE `equity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding`
--
ALTER TABLE `funding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income-cost-of-sales`
--
ALTER TABLE `income-cost-of-sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income-revenue`
--
ALTER TABLE `income-revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inflation`
--
ALTER TABLE `inflation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_income`
--
ALTER TABLE `interest_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan-payment-calculator`
--
ALTER TABLE `loan-payment-calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loss_on_sales_assets`
--
ALTER TABLE `loss_on_sales_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_inputs_totals`
--
ALTER TABLE `model_inputs_totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operating_expenses`
--
ALTER TABLE `operating_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_assets`
--
ALTER TABLE `other_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_income`
--
ALTER TABLE `other_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_liabilities`
--
ALTER TABLE `other_liabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pl_othertax`
--
ALTER TABLE `pl_othertax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_price_increase`
--
ALTER TABLE `product_price_increase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profits_loss_expense_increase`
--
ALTER TABLE `profits_loss_expense_increase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profits_loss_revenue_increase`
--
ALTER TABLE `profits_loss_revenue_increase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_equipment`
--
ALTER TABLE `properties_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recurring_expenses`
--
ALTER TABLE `recurring_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retained_earnings`
--
ALTER TABLE `retained_earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_non_rec_ex`
--
ALTER TABLE `total_non_rec_ex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anual_maintenance`
--
ALTER TABLE `anual_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asset_depreciation`
--
ALTER TABLE `asset_depreciation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cash_flow_financing_activities`
--
ALTER TABLE `cash_flow_financing_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cash_flow_investing_activities`
--
ALTER TABLE `cash_flow_investing_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cash_flow_operating_activities`
--
ALTER TABLE `cash_flow_operating_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `current_assets`
--
ALTER TABLE `current_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `current_liabilities`
--
ALTER TABLE `current_liabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `debt`
--
ALTER TABLE `debt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ending_cash_balance`
--
ALTER TABLE `ending_cash_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equity`
--
ALTER TABLE `equity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funding`
--
ALTER TABLE `funding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `income-cost-of-sales`
--
ALTER TABLE `income-cost-of-sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `income-revenue`
--
ALTER TABLE `income-revenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inflation`
--
ALTER TABLE `inflation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interest_income`
--
ALTER TABLE `interest_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan-payment-calculator`
--
ALTER TABLE `loan-payment-calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `loss_on_sales_assets`
--
ALTER TABLE `loss_on_sales_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `model_inputs_totals`
--
ALTER TABLE `model_inputs_totals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operating_expenses`
--
ALTER TABLE `operating_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `other_assets`
--
ALTER TABLE `other_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `other_income`
--
ALTER TABLE `other_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_liabilities`
--
ALTER TABLE `other_liabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pl_othertax`
--
ALTER TABLE `pl_othertax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_price_increase`
--
ALTER TABLE `product_price_increase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profits_loss_expense_increase`
--
ALTER TABLE `profits_loss_expense_increase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profits_loss_revenue_increase`
--
ALTER TABLE `profits_loss_revenue_increase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties_equipment`
--
ALTER TABLE `properties_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recurring_expenses`
--
ALTER TABLE `recurring_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `retained_earnings`
--
ALTER TABLE `retained_earnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `total_non_rec_ex`
--
ALTER TABLE `total_non_rec_ex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
