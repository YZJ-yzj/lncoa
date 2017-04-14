<?php

use Illuminate\Database\Seeder;

class MechanismsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mechanisms')->insert([
          ['id'=>1, 'name'=> '14中药1班'],
        	['id'=>2, 'name'=> '14中药2班'],
        	['id'=>3, 'name'=> '14人力资源管理班'],
        	['id'=>4, 'name'=> '14会计电算化1班'],
        	['id'=>5, 'name'=> '14会计电算化2班'],
        	['id'=>6, 'name'=> '14会计电算化3班'],
        	['id'=>7, 'name'=> '14会计电算化4班'],
        	['id'=>8, 'name'=> '14会计电算化5班'],
        	['id'=>9, 'name'=> '14会计电算化6班'],
        	['id'=>10, 'name'=> '14会计电算化7班'],
        	['id'=>11, 'name'=> '14会计电算化8班（中澳合作）'],
        	['id'=>12, 'name'=> '14动漫设计与制作1班'],
        	['id'=>13, 'name'=> '14动漫设计与制作2班'],
        	['id'=>14, 'name'=> '14动漫设计与制作3班'],
        	['id'=>15, 'name'=> '14医学营养班'],
        	['id'=>16, 'name'=> '14商务日语班'],
        	['id'=>17, 'name'=> '14商务英语1班'],
        	['id'=>18, 'name'=> '14商务英语2班'],
        	['id'=>19, 'name'=> '14商务英语3班'],
        	['id'=>20, 'name'=> '14商务英语4班'],
        	['id'=>21, 'name'=> '14商务英语5班'],
        	['id'=>22, 'name'=> '14商务英语6班'],
        	['id'=>23, 'name'=> '14商务英语7班'],
        	['id'=>24, 'name'=> '14商务英语8班'],
        	['id'=>25, 'name'=> '14国际商务1班'],
        	['id'=>26, 'name'=> '14国际商务2班'],
        	['id'=>27, 'name'=> '14国际商务3班（中澳合作）'],
        	['id'=>28, 'name'=> '14工业设计1班'],
        	['id'=>29, 'name'=> '14工业设计2班'],
        	['id'=>30, 'name'=> '14工商企业管理（创业管理）1班'],
        	['id'=>31, 'name'=> '14工商企业管理（创业管理）2班'],
        	['id'=>32, 'name'=> '14工商企业管理（创业管理）3班'],
        	['id'=>33, 'name'=> '14工商企业管理（创业管理）4班'],
        	['id'=>34, 'name'=> '14工商企业管理（创业管理）5班'],
        	['id'=>35, 'name'=> '14工商企业管理（创业管理）6班'],
        	['id'=>36, 'name'=> '14工商企业管理（创业管理）7班'],
        	['id'=>37, 'name'=> '14工商企业管理（创业管理）8班'],
        	['id'=>38, 'name'=> '14工商企业管理（连锁经营）班'],
        	['id'=>39, 'name'=> '14工程监理班'],
        	['id'=>40, 'name'=> '14工程造价1班'],
        	['id'=>41, 'name'=> '14工程造价2班'],
        	['id'=>42, 'name'=> '14工程造价3班'],
        	['id'=>43, 'name'=> '14工程造价4班'],
        	['id'=>44, 'name'=> '14工程造价5班'],
        	['id'=>45, 'name'=> '14市场营销1班'],
        	['id'=>46, 'name'=> '14市场营销2班'],
        	['id'=>47, 'name'=> '14广告设计与制作1班'],
        	['id'=>48, 'name'=> '14广告设计与制作2班'],
        	['id'=>49, 'name'=> '14广告设计与制作3班'],
        	['id'=>50, 'name'=> '14应用英语1班'],
        	['id'=>51, 'name'=> '14应用英语2班'],
        	['id'=>52, 'name'=> '14应用韩语班'],
        	['id'=>53, 'name'=> '14康复治疗技术班'],
        	['id'=>54, 'name'=> '14数控技术1班'],
        	['id'=>55, 'name'=> '14数控技术2班'],
        	['id'=>56, 'name'=> '14文秘班'],
        	['id'=>57, 'name'=> '14服装设计1班'],
        	['id'=>58, 'name'=> '14服装设计2班'],
        	['id'=>59, 'name'=> '14机电一体化技术1班'],
        	['id'=>60, 'name'=> '14机电一体化技术2班'],
        	['id'=>61, 'name'=> '14机电一体化技术3班'],
        	['id'=>62, 'name'=> '14模具设计与制造1班'],
        	['id'=>63, 'name'=> '14模具设计与制造2班'],
        	['id'=>64, 'name'=> '14模具设计与制造3班'],
        	['id'=>65, 'name'=> '14物流管理1班'],
        	['id'=>66, 'name'=> '14物流管理2班'],
        	['id'=>67, 'name'=> '14物联网应用技术班'],
        	['id'=>68, 'name'=> '14生物制药技术班'],
        	['id'=>69, 'name'=> '14电子信息工程技术1班'],
        	['id'=>70, 'name'=> '14电子信息工程技术2班'],
        	['id'=>71, 'name'=> '14电子商务1班'],
        	['id'=>72, 'name'=> '14电子商务2班'],
        	['id'=>73, 'name'=> '14电子商务3班'],
        	['id'=>74, 'name'=> '14电子商务4班'],
        	['id'=>75, 'name'=> '14电子商务5班'],
        	['id'=>76, 'name'=> '14电子商务6班'],
        	['id'=>77, 'name'=> '14电子商务7班'],
        	['id'=>78, 'name'=> '14社会工作班'],
        	['id'=>79, 'name'=> '14艺术设计1班'],
        	['id'=>80, 'name'=> '14艺术设计2班'],
        	['id'=>81, 'name'=> '14药学1班'],
        	['id'=>82, 'name'=> '14药学2班'],
        	['id'=>83, 'name'=> '14药学3班'],
        	['id'=>84, 'name'=> '14药学4班'],
        	['id'=>85, 'name'=> '14药学5班'],
        	['id'=>86, 'name'=> '14药学6班'],
        	['id'=>87, 'name'=> '14装饰艺术设计1班'],
        	['id'=>88, 'name'=> '14装饰艺术设计2班'],
        	['id'=>89, 'name'=> '14装饰艺术设计3班'],
        	['id'=>90, 'name'=> '14装饰艺术设计4班'],
        	['id'=>91, 'name'=> '14装饰艺术设计5班'],
        	['id'=>92, 'name'=> '14计算机网络技术1班'],
        	['id'=>93, 'name'=> '14计算机网络技术2班'],
        	['id'=>94, 'name'=> '14计算机网络技术3班'],
        	['id'=>95, 'name'=> '14软件技术1班'],
        	['id'=>96, 'name'=> '14软件技术2班'],
        	['id'=>97, 'name'=> '14软件技术3班'],
        	['id'=>98, 'name'=> '14软件技术4班'],
        	['id'=>99, 'name'=> '14软件技术5班'],
        	['id'=>100, 'name'=> '14软件技术6班（国际IT）'],
        	['id'=>101, 'name'=> '14通信技术1班'],
        	['id'=>102, 'name'=> '14通信技术2班'],
        	['id'=>103, 'name'=> '14通信技术3班'],
        	['id'=>104, 'name'=> '14通信技术4班'],
        	['id'=>105, 'name'=> '14酒店管理班'],
        	['id'=>106, 'name'=> '14金融保险1班'],
        	['id'=>107, 'name'=> '14金融保险2班'],
        	['id'=>108, 'name'=> '14金融保险3班'],
        	['id'=>109, 'name'=> '14食品营养与检测班'],
        	['id'=>110, 'name'=> '15中小企业创业与经营1班'],
        	['id'=>111, 'name'=> '15中小企业创业与经营2班'],
        	['id'=>112, 'name'=> '15中小企业创业与经营3班'],
        	['id'=>113, 'name'=> '15中药1班'],
        	['id'=>114, 'name'=> '15中药2班'],
        	['id'=>115, 'name'=> '15人力资源管理1班'],
        	['id'=>116, 'name'=> '15人力资源管理2班'],
        	['id'=>117, 'name'=> '15会计电算化(涉外会计)班'],
        	['id'=>118, 'name'=> '15会计电算化(电算)1班'],
        	['id'=>119, 'name'=> '15会计电算化(电算)2班'],
        	['id'=>120, 'name'=> '15会计电算化(电算)3班'],
        	['id'=>121, 'name'=> '15会计电算化(电算)4班'],
        	['id'=>122, 'name'=> '15会计电算化(电算)5班'],
        	['id'=>123, 'name'=> '15会计电算化(电算)6班'],
        	['id'=>124, 'name'=> '15动漫设计与制作1班'],
        	['id'=>125, 'name'=> '15动漫设计与制作2班'],
        	['id'=>126, 'name'=> '15动漫设计与制作3班'],
        	['id'=>127, 'name'=> '15动漫设计与制作4班'],
        	['id'=>128, 'name'=> '15动漫设计与制作5班'],
        	['id'=>129, 'name'=> '15医学检验技术1班'],
        	['id'=>130, 'name'=> '15医学检验技术2班'],
        	['id'=>131, 'name'=> '15医学检验技术3班'],
        	['id'=>132, 'name'=> '15医学营养班'],
        	['id'=>133, 'name'=> '15商务日语班'],
        	['id'=>134, 'name'=> '15商务英语1班'],
        	['id'=>135, 'name'=> '15商务英语2班'],
        	['id'=>136, 'name'=> '15商务英语3班'],
        	['id'=>137, 'name'=> '15商务英语4班'],
        	['id'=>138, 'name'=> '15园艺技术班'],
        	['id'=>139, 'name'=> '15国际商务(会展策划)班'],
        	['id'=>140, 'name'=> '15国际商务(国际贸易)班'],
        	['id'=>141, 'name'=> '15工业设计(创意设计)班'],
        	['id'=>142, 'name'=> '15工业设计(珠宝设计)班'],
        	['id'=>143, 'name'=> '15工商企业管理1班'],
        	['id'=>144, 'name'=> '15工商企业管理2班'],
        	['id'=>145, 'name'=> '15工商企业管理3班'],
        	['id'=>146, 'name'=> '15工程监理班'],
        	['id'=>147, 'name'=> '15工程造价1班'],
        	['id'=>148, 'name'=> '15工程造价2班'],
        	['id'=>149, 'name'=> '15工程造价3班'],
        	['id'=>150, 'name'=> '15工程造价4班'],
        	['id'=>151, 'name'=> '15工程造价5班'],
        	['id'=>152, 'name'=> '15市场营销(医药营销)班'],
        	['id'=>153, 'name'=> '15市场营销(汽车评估)班'],
        	['id'=>154, 'name'=> '15市场营销(营销策划)1班'],
        	['id'=>155, 'name'=> '15市场营销(营销策划)2班'],
        	['id'=>156, 'name'=> '15广告设计与制作1班'],
        	['id'=>157, 'name'=> '15广告设计与制作2班'],
        	['id'=>158, 'name'=> '15应用英语班'],
        	['id'=>159, 'name'=> '15应用韩语班'],
        	['id'=>160, 'name'=> '15康复治疗技术1班'],
        	['id'=>161, 'name'=> '15康复治疗技术2班'],
        	['id'=>162, 'name'=> '15护理1班'],
        	['id'=>163, 'name'=> '15护理2班'],
        	['id'=>164, 'name'=> '15护理3班'],
        	['id'=>165, 'name'=> '15护理4班'],
        	['id'=>166, 'name'=> '15护理5班'],
        	['id'=>167, 'name'=> '15护理6班'],
        	['id'=>168, 'name'=> '15数控技术1班'],
        	['id'=>169, 'name'=> '15数控技术2班'],
        	['id'=>170, 'name'=> '15文秘班'],
        	['id'=>171, 'name'=> '15服装设计1班'],
        	['id'=>172, 'name'=> '15服装设计2班'],
        	['id'=>173, 'name'=> '15机电一体化(医疗器械)班'],
        	['id'=>174, 'name'=> '15机电一体化(自动化)1班'],
        	['id'=>175, 'name'=> '15机电一体化(自动化)2班'],
        	['id'=>176, 'name'=> '15机电一体化(自动化)3班'],
        	['id'=>177, 'name'=> '15模具设计(香港合作)班'],
        	['id'=>178, 'name'=> '15模具设计与制造班'],
        	['id'=>179, 'name'=> '15物流管理1班'],
        	['id'=>180, 'name'=> '15物流管理2班'],
        	['id'=>181, 'name'=> '15物联网应用技术班'],
        	['id'=>182, 'name'=> '15生物制药技术班'],
        	['id'=>183, 'name'=> '15电子信息工程技术1班'],
        	['id'=>184, 'name'=> '15电子信息工程技术2班'],
        	['id'=>185, 'name'=> '15电子商务1班'],
        	['id'=>186, 'name'=> '15电子商务2班'],
        	['id'=>187, 'name'=> '15电子商务3班'],
        	['id'=>188, 'name'=> '15电子商务4班'],
        	['id'=>189, 'name'=> '15电子商务5班'],
        	['id'=>190, 'name'=> '15社会工作班'],
        	['id'=>191, 'name'=> '15经济贸易类(中外合作)班'],
        	['id'=>192, 'name'=> '15艺术设计班'],
        	['id'=>193, 'name'=> '15药学1班'],
        	['id'=>194, 'name'=> '15药学2班'],
        	['id'=>195, 'name'=> '15药学3班'],
        	['id'=>196, 'name'=> '15药学4班'],
        	['id'=>197, 'name'=> '15药学5班'],
        	['id'=>198, 'name'=> '15药学6班'],
        	['id'=>199, 'name'=> '15药学7班'],
        	['id'=>200, 'name'=> '15药学8班'],
        	['id'=>201, 'name'=> '15药学9班'],
        	['id'=>202, 'name'=> '15装饰艺术设计1班'],
        	['id'=>203, 'name'=> '15装饰艺术设计2班'],
        	['id'=>204, 'name'=> '15装饰艺术设计3班'],
        	['id'=>205, 'name'=> '15计算机网络技术1班'],
        	['id'=>206, 'name'=> '15计算机网络技术2班'],
        	['id'=>207, 'name'=> '15计算机网络技术3班'],
        	['id'=>208, 'name'=> '15财务会计类(中外合作)班'],
        	['id'=>209, 'name'=> '15软件技术(互联网)1班'],
        	['id'=>210, 'name'=> '15软件技术(互联网)2班'],
        	['id'=>211, 'name'=> '15软件技术(国际IT)班'],
        	['id'=>212, 'name'=> '15软件技术(软件开发)1班'],
        	['id'=>213, 'name'=> '15软件技术(软件开发)2班'],
        	['id'=>214, 'name'=> '15软件技术(软件开发)3班'],
        	['id'=>215, 'name'=> '15软件技术(软件开发)4班'],
        	['id'=>216, 'name'=> '15通信技术(移动通信)1班'],
        	['id'=>217, 'name'=> '15通信技术(移动通信)2班'],
        	['id'=>218, 'name'=> '15通信技术(移动通信)3班'],
        	['id'=>219, 'name'=> '15通信技术(通信工程)1班'],
        	['id'=>220, 'name'=> '15通信技术(通信工程)2班'],
        	['id'=>221, 'name'=> '15酒店管理1班'],
        	['id'=>222, 'name'=> '15酒店管理2班'],
        	['id'=>223, 'name'=> '15金融保险(国际金融)班'],
        	['id'=>224, 'name'=> '15金融保险(投资理财)1班'],
        	['id'=>225, 'name'=> '15金融保险(投资理财)2班'],
        	['id'=>226, 'name'=> '15食品营养与检测班'],
        	['id'=>227, 'name'=> '16中医养生保健班'],
        	['id'=>228, 'name'=> '16中小企业创业管理1班'],
        	['id'=>229, 'name'=> '16中小企业创业管理2班'],
        	['id'=>230, 'name'=> '16中小企业创业管理3班'],
        	['id'=>231, 'name'=> '16中小企业创业管理4班'],
        	['id'=>232, 'name'=> '16中小企业创业管理5班'],
        	['id'=>233, 'name'=> '16中药学1班'],
        	['id'=>234, 'name'=> '16中药学2班'],
        	['id'=>235, 'name'=> '16中药学3班'],
        	['id'=>236, 'name'=> '16人力资源管理1班'],
        	['id'=>237, 'name'=> '16人力资源管理2班'],
        	['id'=>238, 'name'=> '16人力资源管理3班'],
        	['id'=>239, 'name'=> '16企业经营与管理1班'],
        	['id'=>240, 'name'=> '16企业经营与管理2班'],
        	['id'=>241, 'name'=> '16企业经营与管理3班'],
        	['id'=>242, 'name'=> '16企业经营与管理4班'],
        	['id'=>250, 'name'=> '16会计（中外合作）班'],
        	['id'=>243, 'name'=> '16会计1班'],
        	['id'=>244, 'name'=> '16会计2班'],
        	['id'=>245, 'name'=> '16会计3班'],
        	['id'=>246, 'name'=> '16会计4班'],
        	['id'=>247, 'name'=> '16会计5班'],
        	['id'=>248, 'name'=> '16会计6班'],
        	['id'=>249, 'name'=> '16会计7班'],
        	['id'=>251, 'name'=> '16动漫制作技术1班'],
        	['id'=>252, 'name'=> '16动漫制作技术2班'],
        	['id'=>253, 'name'=> '16动漫制作技术3班'],
        	['id'=>254, 'name'=> '16动漫制作技术4班'],
        	['id'=>255, 'name'=> '16动漫制作技术5班'],
        	['id'=>256, 'name'=> '16动漫制作技术6班'],
        	['id'=>257, 'name'=> '16医学检验技术1班'],
        	['id'=>258, 'name'=> '16医学检验技术2班'],
        	['id'=>259, 'name'=> '16医学检验技术3班'],
        	['id'=>260, 'name'=> '16医学营养班'],
        	['id'=>261, 'name'=> '16医疗器械维护与管理班'],
        	['id'=>262, 'name'=> '16商务日语1班'],
        	['id'=>263, 'name'=> '16商务日语2班'],
        	['id'=>264, 'name'=> '16商务英语1班'],
        	['id'=>265, 'name'=> '16商务英语2班'],
        	['id'=>266, 'name'=> '16商务英语3班'],
        	['id'=>267, 'name'=> '16商务英语4班'],
        	['id'=>268, 'name'=> '16商务英语5班'],
        	['id'=>269, 'name'=> '16商务英语6班'],
        	['id'=>272, 'name'=> '16国际商务（中外合作）班'],
        	['id'=>270, 'name'=> '16国际商务1班'],
        	['id'=>271, 'name'=> '16国际商务2班'],
        	['id'=>273, 'name'=> '16工业机器人技术班'],
        	['id'=>274, 'name'=> '16工业设计（产品创意设计）班'],
        	['id'=>275, 'name'=> '16工业设计（珠宝设计）班'],
        	['id'=>276, 'name'=> '16工程造价1班'],
        	['id'=>277, 'name'=> '16工程造价2班'],
        	['id'=>278, 'name'=> '16工程造价3班'],
        	['id'=>279, 'name'=> '16市场营销（医药营销）班'],
        	['id'=>280, 'name'=> '16市场营销（汽车服务评估）班'],
        	['id'=>281, 'name'=> '16市场营销（营销与策划）1班'],
        	['id'=>282, 'name'=> '16市场营销（营销与策划）2班'],
        	['id'=>286, 'name'=> '16广告设计与制作（联合培养）1班'],
        	['id'=>287, 'name'=> '16广告设计与制作（联合培养）2班'],
        	['id'=>283, 'name'=> '16广告设计与制作1班'],
        	['id'=>284, 'name'=> '16广告设计与制作2班'],
        	['id'=>285, 'name'=> '16广告设计与制作3班'],
        	['id'=>288, 'name'=> '16应用英语班'],
        	['id'=>289, 'name'=> '16应用韩语班'],
        	['id'=>290, 'name'=> '16康复治疗技术1班'],
        	['id'=>291, 'name'=> '16康复治疗技术2班'],
        	['id'=>292, 'name'=> '16建设工程监理班'],
        	['id'=>293, 'name'=> '16心理咨询班'],
        	['id'=>295, 'name'=> '16投资与理财（国际金融）班'],
        	['id'=>294, 'name'=> '16投资与理财班'],
        	['id'=>296, 'name'=> '16护理10班'],
        	['id'=>297, 'name'=> '16护理1班'],
        	['id'=>298, 'name'=> '16护理2班'],
        	['id'=>299, 'name'=> '16护理3班'],
        	['id'=>300, 'name'=> '16护理4班'],
        	['id'=>301, 'name'=> '16护理5班'],
        	['id'=>302, 'name'=> '16护理6班'],
        	['id'=>303, 'name'=> '16护理7班'],
        	['id'=>304, 'name'=> '16护理8班'],
        	['id'=>305, 'name'=> '16护理9班'],
        	['id'=>306, 'name'=> '16数控技术班'],
        	['id'=>308, 'name'=> '16服装与服饰设计（联合培养）班'],
        	['id'=>307, 'name'=> '16服装与服饰设计班'],
        	['id'=>309, 'name'=> '16机电一体化技术1班'],
        	['id'=>310, 'name'=> '16机电一体化技术2班'],
        	['id'=>311, 'name'=> '16机电一体化技术3班'],
        	['id'=>312, 'name'=> '16模具设计与制造班'],
        	['id'=>313, 'name'=> '16涉外会计1班'],
        	['id'=>314, 'name'=> '16涉外会计2班'],
        	['id'=>315, 'name'=> '16物流管理1班'],
        	['id'=>316, 'name'=> '16物流管理2班'],
        	['id'=>317, 'name'=> '16物联网应用技术1班'],
        	['id'=>318, 'name'=> '16物联网应用技术2班'],
        	['id'=>321, 'name'=> '16环境艺术设计（联合培养）班'],
        	['id'=>319, 'name'=> '16环境艺术设计1班'],
        	['id'=>320, 'name'=> '16环境艺术设计2班'],
        	['id'=>322, 'name'=> '16电子信息工程技术1班'],
        	['id'=>323, 'name'=> '16电子信息工程技术2班'],
        	['id'=>324, 'name'=> '16电子商务1班'],
        	['id'=>325, 'name'=> '16电子商务2班'],
        	['id'=>326, 'name'=> '16电子商务3班'],
        	['id'=>327, 'name'=> '16电子商务4班'],
        	['id'=>328, 'name'=> '16电子商务5班'],
        	['id'=>329, 'name'=> '16社会工作班'],
        	['id'=>331, 'name'=> '16艺术设计（联合培养）班'],
        	['id'=>330, 'name'=> '16艺术设计班'],
        	['id'=>332, 'name'=> '16药品生产技术班'],
        	['id'=>333, 'name'=> '16药学1班'],
        	['id'=>334, 'name'=> '16药学2班'],
        	['id'=>335, 'name'=> '16药学3班'],
        	['id'=>336, 'name'=> '16药学4班'],
        	['id'=>337, 'name'=> '16药学5班'],
        	['id'=>338, 'name'=> '16药学6班'],
        	['id'=>339, 'name'=> '16药学7班'],
        	['id'=>340, 'name'=> '16药学8班'],
        	['id'=>341, 'name'=> '16计算机网络技术1班'],
        	['id'=>342, 'name'=> '16计算机网络技术2班'],
        	['id'=>343, 'name'=> '16计算机网络技术3班'],
        	['id'=>344, 'name'=> '16计算机网络技术4班'],
        	['id'=>345, 'name'=> '16软件技术（国际IT）班'],
        	['id'=>346, 'name'=> '16软件技术（移动互联网）1班'],
        	['id'=>347, 'name'=> '16软件技术（移动互联网）2班'],
        	['id'=>348, 'name'=> '16软件技术（移动互联网）3班'],
        	['id'=>349, 'name'=> '16软件技术（软件开发）1班'],
        	['id'=>350, 'name'=> '16软件技术（软件开发）2班'],
        	['id'=>351, 'name'=> '16软件技术（软件开发）3班'],
        	['id'=>352, 'name'=> '16软件技术（软件开发）4班'],
        	['id'=>353, 'name'=> '16软件技术（软件开发）5班'],
        	['id'=>354, 'name'=> '16软件技术（软件开发）6班'],
        	['id'=>358, 'name'=> '16通信技术（工程设计管理）1班'],
        	['id'=>359, 'name'=> '16通信技术（工程设计管理）2班'],
        	['id'=>355, 'name'=> '16通信技术（移动通信）1班'],
        	['id'=>356, 'name'=> '16通信技术（移动通信）2班'],
        	['id'=>357, 'name'=> '16通信技术（移动通信）3班'],
        	['id'=>360, 'name'=> '16酒店管理1班'],
        	['id'=>361, 'name'=> '16酒店管理2班'],
        	['id'=>362, 'name'=> '16食品营养与检测班'],
        ]);
    }
}